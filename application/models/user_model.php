<?php
class user_model extends CI_Model{
function insertData($data){
    $this->db->insert('employee',$data);
    if($this->db->affected_rows()>0){
        return true;
    }else{
        false;
    }
}
public function reportData(){
    $query1 = $this->db->query('SELECT salary FROM employee ORDER BY salary DESC LIMIT 1,1');
    $second_salary = $query1->result_array();
    $query2 = $this->db->query('SELECT avg(salary) FROM employee');
    $avg_salary = $query2->result_array();
    $query3 = $this->db->query('SELECT salary FROM employee ORDER BY salary DESC LIMIT 5,1');
    $fifth_high = $query3->result_array();
    return $data = array(
        'second_salary'=>$second_salary,
         'avg_salary'=>$avg_salary,
         'fifth_high'=>$fifth_high
    );
    return $data;
}
}
?>