<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Employee</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="<?php echo base_url('employees/saveemployee');?>" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
										<label>Employee ID</label>
										<input class="form-control" type="text" name="" value="" >
									</div>
                                </div>
                                <div class="col-md-6">
									<div class="form-group">
										<label>Employee Name</label>
										<input class="form-control" type="text" name="empname" value="" >
									</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Department</label>
                                        <input class="form-control" type="text" name="department" value="" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Designation</label>
                                        <input class="form-control" type="text" name="designation" value="" >
                                    </div>
                                </div>
                            </div>                            
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" type="submit">Create Employee</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
