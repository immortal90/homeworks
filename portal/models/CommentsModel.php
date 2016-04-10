<?php
class CommentsModel extends BaseModel
{
    public $tableName = 'comments';

    public function getComments($news_id)
    {

        $sql = sprintf("SELECT * FROM %s WHERE news_id='%s' ORDER BY creation_time DESC", $this->tableName, $news_id);
        /** @var PDOStatement $statement */
        $statement = $this->conn->query($sql);

        $result = $statement->fetchAll();

        $user = new UsersModel();
        foreach ($result as $key => $commentArray) {
            $result[$key]['user'] = $user->findById($commentArray['user_id']);
        }

        return $result;
    }
}