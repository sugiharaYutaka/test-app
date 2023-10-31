<?php
require_once('db.php');

class Video extends Db
{
    public function loadVideo()
    {
        $sql ="select * from video_info";
        $stmt = $this->query($sql,[]);
        $data = $stmt->fetchAll();
        return $data;
    }
    public function loadVideoData($ID)
    {
        $sql ="select * from video_info where ID = ?";
        $stmt = $this->query($sql,[$ID]);
        $data = $stmt->fetch();
        return $data;
    }
    public function insertLiveData($email,$title)
    {
        $sql ="insert into live_info(email, title) values(?,?)";
        $stmt = $this->query($sql,[$email, $title]);
        $data = $stmt->fetch();
        return $data;
    }
    public function loadLiveData($email)
    {
        $sql ="select * from video_info where ID = ?";
        $stmt = $this->query($sql,[$ID]);
        $data = $stmt->fetch();
        return $data;
    }
    public function loadStrkey($email)
    {
        $sql ="select * from account_info where email = ?";
        $stmt = $this->query($sql,[$email]);
        $data = $stmt->fetch();
        return $data['streamKey'];
    }
}
?>