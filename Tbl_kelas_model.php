<?php
class Tbl_kelas_model extends CI_Model{
function ambil_data(){
return $this->db->get("kls");
}
}