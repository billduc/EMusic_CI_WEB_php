<?php /**
 * Created by PhpStorm.
 * User: trungduc
 * Date: 26/05/2017
 * Time: 03:27
 */
class SongList_Model extends MY_Model
{
    public $table = 'album_song_list';

    public function __construct()
    {
        parent::__construct();
    }



    public function set_data($data)
    {
        return $this->create($data);
    }

}