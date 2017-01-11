<?php $data = $this->model_user->getAll('ys_berita'); 

 foreach ($data->result_array() as $d){
     echo $d['judul'];
     "</br>";
     
 ?>
</br>
<?php echo $d['isi'];?>

<?php }?>