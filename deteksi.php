<div class="container">
      <div class="page-title">
      <div style="background-color:  #3498db;padding-bottom: 10px; padding-top: 10px;">
          <p style="font-size: 17px; color:#FFF" align="center">
            DETEKSI PENYAKIT        </p>
        </div></div>
<div class="row">
  <div class="col-lg-12">
    <div class="widget-container fluid-height clearfix">
           <div class="widget-content padded">
           <?php echo validation_errors() ?>
	  <?php echo form_open(base_url('pemilik/simpan')); ?>
	  <div class="row">
  <div class="col-md-12">
 
    <div class="widget-container">
      <div class="widget-content padded" >
          <fieldset>
            
                  <input id="nama" name="nama" value="<?php echo $this->input->post('nama') ?>" type="hidden">
                
                  <input id="telp" name="telp" value="<?php echo $this->input->post('telp') ?>" type="hidden">
                
                  <input id="email" name="email" value="<?php echo $this->input->post('email') ?>" type="hidden">
               
                  <input id="Alamat" name="alamat" value="<?php echo $this->input->post('alamat') ?>" type="hidden">
               
              </fieldset>
              
<div class="heading">
        <i class="fa fa-shield"></i>Pilihlah Gejala
      </div><div align="right"><p>Klik reset jika melakukan deteksi lebih dari sekali !!!</p></div>
       <div align="right"><input class="btn btn-primary" type="button" value="Reset" onClick="this.form.reset()"  /></div>
       <div class="widget-content padded">
        	    <table class="table table-bordered">
                  <thead>
                   <th align="center" bgcolor="#ccff99">
                      No
                    </th>
                    <th align="center" bgcolor="#ccff99">
                     Bagian Kepala
                    </th>
                    <th align="center" bgcolor="#ccff99">
                   Aksi
                    </th>
		
                  </thead>
                  
                  <tbody>
                  
			  <?php
				  $no=1;
				  	foreach($gejala->result_array() as $data)
					   {
			   ?>
               
               <tr><td align="center">
                    <?php echo $no;?>
                      </td>
                      <td align="left">
                       <?php echo $data['prtyn'];?>
					    <input type="hidden" name="gejala<?php echo $no;?>" value=" <?php echo $data['id_gjl'];?>">
                        <input type="hidden" name="penyakit<?php echo $no;?>" value=" <?php echo $data['id_pykt'];?>">
                      </td>
                        <td align="center">
                    
    				<div id="radioBtn">
    					<div data-toggle="buttons">
           <label class="btn btn-primary btn-sm notActive">       <input type="radio" name="aksi<?php echo $no;?>" value="1">Ya</label>
           <label class="btn btn-primary btn-sm notActive">       <input type="radio" name="aksi<?php echo $no;?>" value="0"checked="checked">Tidak</label>
        </div></div>
        
					
					
                      </td>
                    </tr>
                     </tbody>
                <?php $no++ ; } ?>
                </div>
                
                  <thead >
                   <th align="center" bgcolor="#FFFF33">
                      No
                    </th>
                    <th align="center" bgcolor="#FFFF33">
                     Bagian Sayap
                    </th>
                    <th align="center" bgcolor="#FFFF33">
                   Aksi
                    </th>
		
                  </thead>
                  <tbody>
                 
                
              
			   <?php
			    $no1= 1;
				  	foreach($gejala1->result_array() as $data)
					   {
			   ?>
                    <tr><td align="center">
                    <?php echo $no1;?>
                      </td>
                      <td align="left">
                       <?php echo $data['prtyn'];?>
					    <input type="hidden" name="1gejala<?php echo $no1;?>" value=" <?php echo $data['id_gjl'];?>">
                        <input type="hidden" name="1penyakit<?php echo $no1;?>" value=" <?php echo $data['id_pykt'];?>">
                      </td>
                       <td align="center">
                       <div id="radioBtn">
                    <div data-toggle="buttons">
           <label class="btn btn-primary btn-sm notActive">      <input type="radio" name="1aksi<?php echo $no1;?>" value="1">Ya</label>
          <label class="btn btn-primary btn-sm notActive">       <input type="radio" name="1aksi<?php echo $no1;?>" value="0"checked="checked">Tidak</label>
        </div></div>
					
					
                      </td>
                    </tr>
					<?php $no1++ ; } ?>
                  </tbody>
                  <thead>
                   <th align="center" bgcolor="#ccff99">
                      No
                    </th>
                    <th align="center" bgcolor="#ccff99">
                     Bagian Kaki
                    </th>
                    <th align="center" bgcolor="#ccff99">
                   Aksi
                    </th>
		
                  </thead>
                  <tbody>
                 
                
              
			   <?php
			    $no2= 1;
				  	foreach($gejala2->result_array() as $data)
					   {
			   ?>
                    <tr><td align="center">
                    <?php echo $no2;?>
                      </td>
                      <td align="left">
                       <?php echo $data['prtyn'];?>
					    <input type="hidden" name="2gejala<?php echo $no2;?>" value=" <?php echo $data['id_gjl'];?>">
                        <input type="hidden" name="2penyakit<?php echo $no2;?>" value=" <?php echo $data['id_pykt'];?>">
                      </td>
                        <td align="center">
                        <div id="radioBtn">
                    <div data-toggle="buttons">
         <label class="btn btn-primary btn-sm notActive">       <input type="radio" name="2aksi<?php echo $no2;?>" value="1">Ya</label>
          <label class="btn btn-primary btn-sm notActive">       <input type="radio" name="2aksi<?php echo $no2;?>" value="0"checked="checked">Tidak</label>
        </div></div>
					
					
                      </td>
                    </tr>
					<?php $no2++ ; } ?>
                  </tbody>
                  <thead >
                   <th align="center" bgcolor="#FFFF33">
                      No
                    </th>
                    <th align="center" bgcolor="#FFFF33">
                     Bagian Bulu
                    </th>
                    <th align="center" bgcolor="#FFFF33">
                   Aksi
                    </th>
		
                  </thead>
                  <tbody>
                 
                
              
			   <?php
			    $no3= 1;
				  	foreach($gejala3->result_array() as $data)
					   {
			   ?>
                    <tr><td align="center">
                    <?php echo $no3;?>
                      </td>
                      <td align="left">
                       <?php echo $data['prtyn'];?>
					    <input type="hidden" name="3gejala<?php echo $no3;?>" value=" <?php echo $data['id_gjl'];?>">
                        <input type="hidden" name="3penyakit<?php echo $no3;?>" value=" <?php echo $data['id_pykt'];?>">
                      </td>
                        <td align="center">
                        <div id="radioBtn">
                    <div data-toggle="buttons">
          <label class="btn btn-primary btn-sm notActive">       <input type="radio" name="3aksi<?php echo $no3;?>" value="1">Ya</label>
          <label class="btn btn-primary btn-sm notActive">       <input type="radio" name="3aksi<?php echo $no3;?>" value="0"checked="checked">Tidak</label>
        </div></div>
					
					
                      </td>
                    </tr>
					<?php $no3++ ; } ?>
                  </tbody>
                  <thead>
                   <th align="center" bgcolor="#ccff99">
                      No
                    </th>
                    <th align="center" bgcolor="#ccff99">
                     Bagian Kotoran
                    </th>
                    <th align="center" bgcolor="#ccff99">
                   Aksi
                    </th>
		
                  </thead>
                  <tbody>
                 
                
              
			   <?php
			    $no4= 1;
				  	foreach($gejala4->result_array() as $data)
					   {
			   ?>
                    <tr><td align="center">
                    <?php echo $no4;?>
                      </td>
                      <td align="left">
                       <?php echo $data['prtyn'];?>
					    <input type="hidden" name="4gejala<?php echo $no4;?>" value=" <?php echo $data['id_gjl'];?>">
                        <input type="hidden" name="4penyakit<?php echo $no4;?>" value=" <?php echo $data['id_pykt'];?>">
                      </td>
                        <td align="center">
                        <div id="radioBtn">
                    <div data-toggle="buttons">
           <label class="btn btn-primary btn-sm notActive">       <input type="radio" name="4aksi<?php echo $no4;?>" value="1">Ya</label>
           <label class="btn btn-primary btn-sm notActive">       <input type="radio" name="4aksi<?php echo $no4;?>" value="0"checked="checked">Tidak</label>
        </div></div>
					
					
                      </td>
                    </tr>
					<?php $no4++ ; } ?>
                  </tbody>
                   <thead>
                   <th align="center" bgcolor="#FFFF33">
                      No
                    </th>
                    <th align="center" bgcolor="#FFFF33">
                     Bagian Prilaku
                    </th>
                    <th align="center" bgcolor="#FFFF33">
                   Aksi
                    </th>
		
                  </thead>
                  <tbody>
                 
                
              
			   <?php
			    $no5= 1;
				  	foreach($gejala5->result_array() as $data)
					   {
			   ?>
                    <tr><td align="center">
                    <?php echo $no5;?>
                      </td>
                      <td align="left">
                       <?php echo $data['prtyn'];?>
					    <input type="hidden" name="5gejala<?php echo $no5;?>" value=" <?php echo $data['id_gjl'];?>">
                        <input type="hidden" name="5penyakit<?php echo $no5;?>" value=" <?php echo $data['id_pykt'];?>">
                      </td>
                        <td align="center">
                        <div id="radioBtn">
                    <div data-toggle="buttons">
          <label class="btn btn-primary btn-sm notActive">       <input type="radio" name="5aksi<?php echo $no5;?>" value="1">Ya</label>
          <label class="btn btn-primary btn-sm notActive">       <input type="radio" name="5aksi<?php echo $no5;?>" value="0"checked="checked">Tidak</label>
        </div></div>
					
					
                      </td>
                    </tr>
					<?php $no5++ ; } ?>
                  </tbody>
                  <thead>
                   <th align="center" bgcolor="#ccff99">
                      No
                    </th>
                    <th align="center" bgcolor="#ccff99">
                     Bagian Pernafasan
                    </th>
                    <th align="center" bgcolor="#ccff99">
                   Aksi
                    </th>
		
                  </thead>
                  <tbody>
                 
                
              
			   <?php
			    $no6= 1;
				  	foreach($gejala6->result_array() as $data)
					   {
			   ?>
                    <tr><td align="center">
                    <?php echo $no6;?>
                      </td>
                      <td align="left">
                       <?php echo $data['prtyn'];?>
					    <input type="hidden" name="6gejala<?php echo $no6;?>" value=" <?php echo $data['id_gjl'];?>">
                        <input type="hidden" name="6penyakit<?php echo $no6;?>" value=" <?php echo $data['id_pykt'];?>">
                      </td>
                        <td align="center">
                        <div id="radioBtn">
                    <div data-toggle="buttons">
          <label class="btn btn-primary btn-sm notActive">       <input type="radio" name="6aksi<?php echo $no6;?>" value="1">Ya</label>
          <label class="btn btn-primary btn-sm notActive">       <input type="radio" name="6aksi<?php echo $no6;?>" value="0"checked="checked">Tidak</label>
        </div></div>
					
					
                      </td>
                    </tr>
					<?php $no6++ ; } ?>
                  </tbody>
                   <thead>
                   <th align="center" bgcolor="#FFFF33">
                      No
                    </th>
                    <th align="center" bgcolor="#FFFF33">
                     Lain-lain
                    </th>
                    <th align="center" bgcolor="#FFFF33">
                   Aksi
                    </th>
		
                  </thead>
                  <tbody>
                 
                
              
			   <?php
			    $no7= 1;
				  	foreach($gejala7->result_array() as $data)
					   {
			   ?>
                    <tr><td align="center">
                    <?php echo $no7;?>
                      </td>
                      <td align="left">
                       <?php echo $data['prtyn'];?>
					    <input type="hidden" name="7gejala<?php echo $no7;?>" value=" <?php echo $data['id_gjl'];?>">
                        <input type="hidden" name="7penyakit<?php echo $no7;?>" value=" <?php echo $data['id_pykt'];?>">
                      </td>
                        <td align="center">
                        <div id="radioBtn">
                    <div data-toggle="buttons">
          <label class="btn btn-primary btn-sm notActive">       <input type="radio" name="7aksi<?php echo $no7;?>" value="1">Ya</label>
          <label class="btn btn-primary btn-sm notActive">       <input type="radio" name="7aksi<?php echo $no7;?>" value="0"checked="checked">Tidak</label>
          
        </div></div>
					
					
                      </td>
                    </tr>
					<?php $no7++ ; } ?>
                  </tbody>
                </table>
                
          <div class="form-group" align="right">
            <label class="control-label col-md-12"></label>
            <div class="col-md-7">
			  <input type="hidden" name="id" value="<?php echo md5(rand()); ?>">
			  <input type="hidden" name="t" value="<?php echo $no-1; ?>" />
              <input type="hidden" name="1t" value="<?php echo $no1-1; ?>" />
              <input type="hidden" name="2t" value="<?php echo $no2-1; ?>" />
              <input type="hidden" name="3t" value="<?php echo $no3-1; ?>" />
              <input type="hidden" name="4t" value="<?php echo $no4-1; ?>" />
              <input type="hidden" name="5t" value="<?php echo $no5-1; ?>" />
              <input type="hidden" name="6t" value="<?php echo $no6-1; ?>" />
              <input type="hidden" name="7t" value="<?php echo $no7-1; ?>" />
			  <input type="hidden" name="id_gjl" value="<?php echo $id_gjl; ?>">
              <input type="hidden" name="id_pykt" value="<?php echo $id_pykt; ?>">
              <button class="btn btn-primary" type="submit">Submit</button>
              <input class="btn btn-default-outline" type="button" value="Cancel" onclick="history.back(-1)" />           </button>
           
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


 <script type="text/javascript">
 $('#radioBtn a').on('click', function(){
    var sel = $(this).data('title');
    var tog = $(this).data('toggle');
    $('#'+tog).prop('value', sel);
    
    $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
    $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
})
</script>

<script type="text/javascript">
window.onunload = function(){
  window.opener.location.reload(true);
};
</script>