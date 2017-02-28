<?php 
    $formtitle="ADD NEW DATA";
?>
<div class="modal-content">
    <form name="crud" id="form_crud" enctype="multipart/form-data" request="insert">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
             <h5 class="card-header-text text-primary"><?=$formtitle;?></h5>
        </div>
        <div class="modal-body">
           <div class="card">
                <div class="card-block"> 
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="md-group-add-on p-relative">
                         <span class="md-add-on">
                            <i class="icofont icofont-ui-user"></i>
                         </span>
                            <div class="md-input-wrapper">
                                <input type="text" class="md-form-control" name="name" id="name" required="" oninvalid="this.setCustomValidity('<?=$FORM_INPUT_REQUIRED;?>')">
                                <label for="name"><?=$LABEL_FULL_NAME;?></label>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="md-group-add-on p-relative">
                         <span class="md-add-on">
                            <i class="icofont icofont-email"></i>
                         </span>
                            <div class="md-input-wrapper">
                                <input type="text" class="md-form-control"  name="title" id="title" required="" oninvalid="this.setCustomValidity('<?=$FORM_INPUT_REQUIRED;?>')">
                                <label for="title"><?=$LABEL_POSITION;?></label>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card-block end -->
            </div>
                <!-- card end -->
        </div>
            <!-- modal-body end -->
        <div class="modal-footer">
            <button type="button" class="btn btn-warning btn-sm waves-effect " data-dismiss="modal"><?=$LABEL_CANCEL;?></button>
            <button type="reset" class="btn btn-default btn-sm waves-effect " id="reset"><?=$LABEL_RESET;?></button>
            <button type="submit" class="btn btn-primary btn-sm waves-effect " id="submit"><?=$LABEL_SAVE;?></button>

            <!--
            <button type="button" class="btn btn-primary waves-effect waves-light alert-confirm" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'alert-confirm']);">Save changes</button>
            -->
        </div>
    </form>
</div>