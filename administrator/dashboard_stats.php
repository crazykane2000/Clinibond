

   

   <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
      <a href="#">
        <div class="card" style="background-color: #0e4a90">
          <div class="row">
            <div class="col-sm-4" style="text-align: center;">
              <img src="img/profits.svg" class="ico" style="opacity: 1">
            </div>
            <div class="col-sm-8 rgt">
              <div style="padding: 10px;"></div>
              <div style="font-size: 12px;color: #fff;">TOTAL Registers</div>
              <div style="font-size: 25px;color: #7fb6f7;font-family: 'Century Gothic';font-weight: bold;">
               <?php
                      try {
                              $stmt = $pdo->prepare( 'SELECT id FROM users ');                            
                          } catch(PDOException $ex) {
                              echo "An Error occured!"; 
                              print_r($ex->getMessage());
                          }
                          $stmt->execute();
                          $user = $stmt->rowCount();
                          echo $user;
                   ?> 


              </div>
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
      <a href="#">
        <div class="card" style="background-color: #0e4a90">
          <div class="row">
            <div class="col-sm-4" style="text-align: center;">
              <img src="img/profits.svg" class="ico" style="opacity: 1">
            </div>
            <div class="col-sm-8 rgt">
              <div style="padding: 10px;"></div>
              <div style="font-size: 12px;color: #fff;">TOTAL Infos</div>
              <div style="font-size: 25px;color: #7fb6f7;font-family: 'Century Gothic';font-weight: bold;">
               <?php
                      try {
                              $stmt = $pdo->prepare( 'SELECT id FROM users ');                            
                          } catch(PDOException $ex) {
                              echo "An Error occured!"; 
                              print_r($ex->getMessage());
                          }
                          $stmt->execute();
                          $user = $stmt->rowCount();
                          echo $user;
                   ?> 


              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>