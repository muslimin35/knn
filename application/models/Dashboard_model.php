<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    public $table = 'cbt_user';

    function __construct()
    {
        parent::__construct();
    }
    function count_all_user()
    {
        $query = $this->db->count_all('user');
        return $query;
    }
    function count_all_peserta()
    {
        $query = $this->db->count_all('cbt_user');
        return $query;
    }
    function count_all_soal()
    {
        $query = $this->db->count_all('cbt_soal');
        return $query;
    }
    function count_all_topic()
    {
        $query = $this->db->count_all('cbt_topik');
        return $query;
    }
    function get_today_5_test()
    {
        $today = date("Y-m-d H:i:s");
        $this->db->select('*');
        $this->db->where('tes_begin_time >=', $today);
        $this->db->limit(5);
        $query = $this->db->get('cbt_tes');
        return $query->result_array();
    }
}
