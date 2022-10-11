<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="css.css" />
  </head>
  <body>
  <?php
        require 'conn.php';
    ?>



    <h1>Data of User</h1>
    <div class="container">
      <div id="myapp">
        <!-- Select All records -->
        <input
          type="button"
          class="btn btn-outline-success"
          @click="allRecords()"
          value="Select All users"
        />
        <br /><br />

        <!-- Select record by ID -->
        <form class="form-inline">
          <label class="mr-2">Enter your ID</label>
          <input
            type="text"
            class="form-control"
            v-model="userid"
            placeholder="Enter Userid between 1 - 24"
          />
          <input
            type="button"
            class="btn btn-outline-success m-3"
            @click="recordByID()"
            value="Select user by ID"
          />
        </form>

        <br /><br />

        <!-- List records -->
        <table class="table">
          <thead class="thead-dark">
          <tr>
              <th scope="col">id</th>
              <th scope="col">Name</th>
              <th scope="col">date</th>
              <th scope="col">statue</th>
            </tr>
          </thead>
        <tbody>
            <?php
                $users = "SELECT * FROM `users`";
                $select = mysqli_query($con, $users);
                while ($user = mysqli_fetch_assoc($select)) {
                    // echo $user['name'] . ' ==> ' . $user['date'] . '<br>'; 
            
            ?>

            <tr>
              <td><?php echo $user['id'] ?></td>
              <td><?php echo $user['name'] ?></td>
              <td><?php echo $user['date'] ?></td>
              <td><?php echo $user['status'] % 2 == 0 ? 'in' : 'out' ?></td>
            </tr>

             <?php
              }
              ?>
          </tbody>
        </table>
      </div>
    </div>

  </body>
</html>
