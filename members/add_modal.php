<!-- Modal -->
    <div id="myModal_add" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content"  style="border-radius: 0px;">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add New User</h4>
          </div>
          <div class="modal-body">
            <div style="padding: 30px;">
             <form action="add_member_handle.php" method="POST">
                  <div class="form-group">
                    <label class="control-label">Name</label>
                    <input class="form-control" style="border-radius: 0px;border:solid 1px #ddd;" type="text" name="name" placeholder="Enter full name">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Email</label>
                    <input class="form-control" style="border-radius: 0px;border:solid 1px #ddd;"  type="email" name="email" placeholder="Enter email address">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Enter Phone Number</label>
                    <input class="form-control" style="border-radius: 0px;border:solid 1px #ddd;"  type="text" name="phone"  placeholder="Phone Number">
                  </div>

                  <div class="form-group">
                    <label class="control-label">Enter Password</label>
                    <input class="form-control" style="border-radius: 0px;border:solid 1px #ddd;" name="pass"  type="text" placeholder="Password">
                  </div>

                 
                  <div class="form-group">
                    <label class="control-label">Enter Status</label>
                    <select class="form-control" style="border-radius: 0px;border:solid 1px #ddd;"  name="status">
                      <option value="Approved">Approved</option>
                      <option value="Pending">Pending</option>
                    </select>
                  </div>

                  <div class="form-group">
                      <input type="submit" class="btn btn-success" name="add_user" value="Create User">
                  </div>                  
                                 
                </form>
           </div>
          </div>
          
        </div>

      </div>
    </div>