<?php
/* * *******************************************************************************
 * The content of this file is subject to the MYC Vtiger Customer Portal license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is Proseguo s.l. - MakeYourCloud
 * Portions created by Proseguo s.l. - MakeYourCloud are Copyright(C) Proseguo s.l. - MakeYourCloud
 * All Rights Reserved.
 * ****************************************************************************** */
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo Language::translate($module); ?> </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    
                        
                       <?php if(isset($data) && count($data)>0){ ?>
                       
                       <?php foreach($data as $table): ?> 
                       
                       
                       
                       <?php if(isset($table['recordlist']) && count($table['recordlist'])>0 && $table['recordlist']!=""){ ?>
                       
                       <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo Language::translate($table['tablename']); ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        
                       
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTables" >
                                    <thead>
                                        <tr>
                                        <?php foreach($table['tableheader'] as $hf) echo "<th>".Language::translate($hf['fielddata'])."</th>"; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    	<?php 
                                    	foreach($table['recordlist'] as $record){
                                    	
                                    			echo "<tr>";
                                    			foreach($record as $record_fields) echo "<td>".Language::translate($record_fields['fielddata'])."</td>";
                                    			echo "</tr>";
                                    			 																	
                                    	}
	                                    	
                                    	?>
                                    	                                                                              
                                    </tbody>
                                </table>
                            </div>
                            
                            </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                         <?php } ?> 
                         <?php endforeach; ?> 
                         
                         <?php } else { ?>    
                            <h2><?php echo Language::translate("No ".$module." records Found!"); ?></h2>
                         <?php } ?>   
                            
                       
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
		</div>
        <!-- /#page-wrapper -->
         <script>
	    $(document).ready(function() {
	        $('.dataTables').dataTable();
	    });
	    </script>