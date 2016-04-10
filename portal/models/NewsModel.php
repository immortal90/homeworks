<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 02.04.2016
 * Time: 18:26
 */
class NewsModel extends BaseModel
{
    public $tableName = 'news';

    public function getCategories()
    {
        $sql = sprintf("SELECT category FROM %s LIMIT %s OFFSET %s", $this->tableName, $this->perPage, $this->offset);
        /** @var PDOStatement $statement */
        $statement = $this->conn->query($sql);

        $result = $statement->fetchAll(PDO::FETCH_COLUMN);

        return $result;
    }

    /**
     * @param string $categoryName name of category
     * @return array all news from this category
     */
    public function getCategoryNews($categoryName)
    {
        $sql = sprintf("SELECT * FROM %s WHERE category='%s' LIMIT %s OFFSET %s", $this->tableName, $categoryName, $this->perPage, $this->offset);
        /** @var PDOStatement $statement */
        $statement = $this->conn->query($sql);

        $result = $statement->fetchAll();
        $comment = new CommentsModel();

        foreach ($result as $key => $newsArray) {
            $result[$key]['comments'] = $comment->getComments($newsArray['news_id']);
        }

        return $result;
    }
}