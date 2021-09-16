<?php

class QueryBuilder
{
//    создаем переменную в классе
    protected $pdo;

//    Прописываем Конструктор что бы не писать PDO в каждой функции
//      внутренней переменной
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll($table)
    {
        // 1  сформировать запрос
        $sql = "SELECT * FROM {$table}";
        // 2  выполнить запрос ( у PDO есть метод prepare )
        $statement = $this->pdo->prepare($sql);
        // 2.1 execute  ==== выполнить
        $statement->execute();
        // 2.2  Получить данные   fetch - одну , fetсhAll - все записи
        //  получаем все записи в массив $posts
        //  $posts = $statement->fetchAll();
        // 3 получить асоциативный массив в переменную  $posts в виде асоциативного массива добавляем (PDO::FETCH_ASSOC);
        return $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getOne($table, $id)
    {
        $sql = "SELECT * FROM {$table} WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        //bindValue привязыват значение
        $statement->bindValue(':id', $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function create($table, $data)
    {
        $keys = implode(',', array_keys($data));
        $tags = ":" . implode(', :', array_keys($data));

        $sql = "INSERT INTO {$table} ({$keys}) VALUES ({$tags})";

        $statement = $this->pdo->prepare($sql);
        $statement->execute($data);
//        output($statement);
    }

    public function update($table, $data, $id)
    {
        $keys = array_keys($data);
        $string = '';
        foreach ($keys as $key) {
            $string .= $key . '=:' . $key . ',';
        }
        $keys = rtrim($string, ',');
        $data['id'] = $id;

        $sql = "UPDATE {$table} SET {$keys} WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute($data);
    }

    public function delete($table, $id){
        $sql = "DELETE  FROM {$table} WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([
           'id' => $id
        ]);
    }
}