<?php
class M_ActionSmartLocker extends CI_Model{

    function table_name()
    {
        return 'action_smart_locker';
    }
 
    function getAll(){
        $this->db->from($this->table_name());
        $this->db->order_by("no", "desc");
        $query = $this->db->get(); 
        return $query->result();
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