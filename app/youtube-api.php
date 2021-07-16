<?php

class Youtube{

    function __construct(){
        $this->api = 'AIzaSyADgjEgq3ZibrgBo7f3g6MCp6sIQ7DrhOM';
    }

    function get_list_videos(){
        $json = file_get_contents('https://www.googleapis.com/youtube/v3/videos?part=snippet&maxResults=10&chart=mostPopular&regionCode=BR&key='.$this->api);
        $obj = json_decode($json);

        $result= array();

        foreach ($obj->items as $video) {
            array_push($result, array(
                'id'=> $video->id,
                'nome'=> $video->snippet->title,
                'thumbnail'=> $video->snippet->thumbnails->standard->url,
                'user'=> $this->get_user($video->snippet->channelId),
                'data'=> $video->snippet->publishedAt
            ));
        }

        return $result;
    }

    function get_user($user_id){
        $json = file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id='.$user_id.'&regionCode=BR&key='.$this->api);
        $obj = json_decode($json);

        $user = $obj->items[0];

        return array(
            'id'=> $user->id,
            'nome'=> $user->snippet->title,
            'img'=> $user->snippet->thumbnails->default->url,
            'inscritos'=> $user->statistics->subscriberCount
        );

    }
    
    function search_videos($query){
        $json = file_get_contents(
            'https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults=20&type=video&q='.urlencode($query).'&regionCode=BR&key='.$this->api);
        $obj = json_decode($json);

        $result= array();
        foreach ($obj->items as $video) {
            $n_video = $this->get_video($video->id->videoId);
            if($n_video['nome']!=null){
                array_push($result, $n_video);
            }
        }
        return $result;
    }

    function get_related_videos($video_id){
        $json = file_get_contents(
            'https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults=20&type=video&relatedToVideoId='.$video_id.'&regionCode=BR&key='.$this->api);
        $obj = json_decode($json);

        $result= array();

        foreach ($obj->items as $video) {
            $n_video = $this->get_video($video->id->videoId);
            if($n_video['nome']!=null){
                array_push($result, $n_video);
            }
        }
        return $result;
    }

    function get_video($video_id){
        $json = file_get_contents('https://www.googleapis.com/youtube/v3/videos?part=snippet,statistics&id='.$video_id.'&key='.$this->api);
        $obj = json_decode($json);

        $video = $obj->items[0];

        return array(
            'id'=> $video_id,
            'nome'=> $video->snippet->title,
            'descricao'=> $video->snippet->description,
            'thumbnail'=> (isset($video->snippet->thumbnails->standard->url))? $video->snippet->thumbnails->standard->url : $video->snippet->thumbnails->high->url,
            'data'=> $video->snippet->publishedAt,
            'user'=> $this->get_user($video->snippet->channelId),
            'estatisticas'=> array(
                'views'=> $video->statistics->viewCount,
                'likes'=> (isset($video->statistics->likeCount))? $video->statistics->likeCount : 0 ,
                'dislikes'=> (isset($video->statistics->dislikeCount))? $video->statistics->dislikeCount : 0,
            )
        );

    }

}
?>