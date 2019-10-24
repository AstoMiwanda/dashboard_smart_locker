<?php
class M_EmptyLocker extends CI_Model{

    function table_name()
    {
        return 'action_smart_locker';
    }
 
    function getStatusRFTAG(){
        // $hasil=$this->db->query("SELECT MAX(NO) nomor, nik, locker, MAX(DATE) tanggal, rftag FROM action_smart_locker a ".
        // "GROUP BY locker ".
        // "ORDER BY a.`no` DESC ");
        $id = 0;
        $locker;        
        $this->db->from($this->table_name());
        $this->db->order_by("no", "desc");
        $query = $this->db->get();
        $data[] = array();
        foreach ($query->result() as $key => $value) {
            if ($key == 0) {                
                $locker = $value->locker;
                $data[0] = array('no'  => $value->no, 'locker' => $value->locker, 'rftag' => $value->rftag);
                $id++;
            }
            if ($value->locker != $locker) {
                $data[1] = array('no'  => $value->no, 'locker' => $value->locker, 'rftag' => $value->rftag);
                $id++;
                break;
            }
        }
        
        if ($data[0]['locker'] > $data[1]['locker']) {
            $data[2] = $data[1];
            $data[1] = $data[0];
            $data[0] = $data[2];
            unset($data[2]);
        }
        
        return $data;
    }
    
    /*
    function save_product(){
        $data = array(
                'product_code'  => $this->input->post('product_code'), 
                'product_name'  => $this->input->post('product_name'), 
                'product_price' => $this->input->post('price'), 
            );
        $result=$this->db->insert('product',$data);
        return $result;
    }
 
    function update_product(){
        $product_code=$this->input->post('product_code');
        $product_name=$this->input->post('product_name');
        $product_price=$this->input->post('price');
 
        $this->db->set('product_name', $product_name);
        $this->db->set('product_price', $product_price);
        $this->db->where('product_code', $product_code);
        $result=$this->db->update('product');
        return $result;
    }
 
    function delete_product(){
        $product_code=$this->input->post('product_code');
        $this->db->where('product_code', $product_code);
        $result=$this->db->delete('product');
        return $result;
    }
     */
}