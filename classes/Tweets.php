<?php

class Tweets {
    
    private $db;
    
    public function __construct($database) {
        $this->db = $database;
    }
    
    public function add_tweet($content, $id_user, $date) {
        $sql =$this->db->prepare("INSERT INTO tweets (content, id_user, tweet_date) VALUES(:content, :id_user, :tweet_date)");
        $sql->bindValue(":content", $content);
        $sql->bindValue(":id_user", $id_user);
        $sql->bindValue(":tweet_date", $date);
        $sql->execute();
    }
    
    public function get_tweets($id_user) {
        $sql = $this->db->prepare("SELECT users.avatar, users.username, users.display_name, tweets.content, tweets.id_tweet, tweets.tweet_date
        FROM users JOIN  tweets ON users.id_user=tweets.id_user
        WHERE users.id_user = :id_user ORDER BY tweets.tweet_date");
        $sql->bindValue(":id_user", $id_user);
        $sql->execute();
        $tweets_data = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $tweets_data;
    }
    
    public function add_hashtag($id_tweet, $tag) {
        $sql =$this->db->prepare("INSERT INTO hashtags (id_tweet, tag) VALUES(:id_tweet, :tag)");
        $sql->bindValue(":id_tweet", $id_tweet);
        $sql->bindValue(":tag", $tag);
        $sql->execute();
    }
    
    public function add_mention($id_tweet, $id_user_mention) {
        $sql =$this->db->prepare("INSERT INTO mentions (id_tweet, id_user_mention) VALUES(:id_tweet, :id_user_mention)");
        $sql->bindValue(":id_tweet", $id_tweet);
        $sql->bindValue(":id_user_mention", $id_user_mention);
        $sql->execute();
    }
    
    public function add_react($id_tweet, $react) {
        $sql =$this->db->prepare("INSERT INTO react (id_tweet, type) VALUES(:id_tweet, :type)");
        $sql->bindValue(":id_tweet", $id_tweet);
        $sql->bindValue(":react", $react);
        $sql->execute();
    }
    
    public function get_retweets($id_user, $type = "RT") {
        $sql = $this->db->prepare("SELECT id_tweet FROM react WHERE id_user=:id_user AND type=:type");
        $sql->bindValue(":id_user", $id_user);
        $sql->bindValue(":type", $type);
        $sql->execute();
    }
    
    public function get_like($id_user, $type = "LK") {
        $sql = $this->db->prepare("SELECT id_tweet FROM react WHERE id_user=:id_user AND type=:type");
        $sql->bindValue(":id_user", $id_user);
        $sql->bindValue(":type", $type);
        $sql->execute();
    }
    
    public function get_data_from_tweet($id_tweet) {
        $sql = $this->db->prepare("SELECT users.id_user FROM tweets WHERE id_tweet=:id_tweet");
        
    }
}