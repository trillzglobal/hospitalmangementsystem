<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="modal fade" id="modalLoginForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form method="post" action="#" enctype="multiform/data-file">
                                    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold"><b><font color="green"><?php echo $ltest; ?></font></b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                     <label data-error="wrong" data-success="right" for="defaultForm-email"></label>
                     <input type="text" name="patient_id" value="<?php echo $ppatient_id;?>" class="form-control" readonly="readonly">
                    <input type="hidden" name="id_result" value="<?php echo $id;?>">
<div class="md-form mb-4">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="test_result">Report:</label>
                    <textarea class="form-control" rows="4" name="test_result"></textarea>
                    
                </div>

                </div>


            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="submit" class="btn btn-default" name="submit_result">Submit</button>
            </div>
        </div>
    </div>
    </form>
                   
</div>
   
           <div class="col-lg-offset-3 col-lg-3 col-md-3">
    <a href="" class="btn btn-danger btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm1">Result</a>
</div>

