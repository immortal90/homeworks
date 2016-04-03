<?php


class UsersModel extends BaseModel
{
    public $tableName = 'users';

    public function login($user)
    {
        $user['user_password'] = md5(md5(trim($user['user_password'])));
        $sql = sprintf("SELECT * FROM %s WHERE user_login='%s' AND user_password='%s'", $this->tableName, $user['user_login'], $user['user_password']);
        /** @var PDOStatement $statement */
        $statement = $this->conn->query($sql);

        $result = $statement->fetch();

        return $result;
    }

    public function validateRegistration($user)
    {
        $err = array();

        if (!preg_match("/^[a-zA-Z0-9]+$/", $user['user_login'])) {
            $err[] = "Логин может состоять только из букв английского алфавита и цифр";
        }

        if (strlen($user['user_login']) < 3 or strlen($user['user_login']) > 30) {
            $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
        }

        # проверяем, не сущестует ли пользователя с таким именем
        $this->perPage=1;
        $sql = sprintf("SELECT user_id FROM %s WHERE user_login='%s' LIMIT %s OFFSET %s", $this->tableName, $user['user_login'], $this->perPage, $this->offset);
        /** @var PDOStatement $statement */
        $statement = $this->conn->query($sql);
        $result = $statement->fetchAll(PDO::FETCH_COLUMN);

        if (!empty($result) && (int)$result[0] > 0) {
            $err[] = "<p>Пользователь с таким логином уже существует в базе данных</p>";
        }
        if (count($err)>0) {
            $message = "<h2><b>При регистрации произошли следующие ошибки:</b></h2><br>";
            foreach ($err AS $error) {
                $message.= $error . "<br>";
            }
            return $message;
        } else {
            return true;
        }
    }
}