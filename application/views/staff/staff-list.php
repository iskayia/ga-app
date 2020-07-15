<style>
		
			.kanan{
				text-align:right;
			}

      body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 1000px;
  padding: 15px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 20px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

		</style>
        
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List Permintaan Order Kerja</h4>
                  <p class="card-category"> Data permintaan order kerja yang baru dan yang sedang dikerjakan akan tercantum disini.</p>
                  <p class="kanan"><button type="button" class="btn btn-dark" onclick="openForm()" >+</button>
                  </p>
                </div>
               
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          No
                        </th>
                        <th>
                          Orke Permintaan 
                        </th>
                        <th>
                          Jumlah
                        </th>
                        <th>
                          Status
                        </th>
                        <th>
                          detail info
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                           10
                          </td>
                          <td>
                            sedang proses
                          </td>
                          <td class="text-primary">
                          <button type="submit" class="btn btn-info">info</button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Minerva Hooper
                          </td>
                          <td>
                            5
                          </td>
                          <td>
                          sedang proses
                          </td>
                          <td class="text-primary">
                          <button type="submit" class="btn btn-info">info</button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Sage Rodriguez
                          </td>
                          <td>
                            3
                          </td>
                          <td>
                            menunggu persetujuan
                          </td>
                          <td class="text-primary">
                          <button type="submit" class="btn btn-info">info</button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Philip Chaney
                          </td>
                          <td>
                            2
                          </td>
                          <td>
                          sedang proses
                          </td>
                          <td class="text-primary">
                          <button type="submit" class="btn btn-info">info</button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Doris Greene
                          </td>
                          <td>
                            6
                          </td>
                          <td>
                            menunggu persetujuan
                          </td>
                          <td class="text-primary">
                          <button type="submit" class="btn btn-info">info</button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            6
                          </td>
                          <td>
                            Mason Porter
                          </td>
                          <td>
                            4
                          </td>
                          <td>
                            jeda
                          </td>
                          <td class="text-primary">
                          <button type="submit" class="btn btn-info">info</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
<!-- modal mulai dari sini-->

            <div class="form-popup" id="myForm">
                    <form action="/staff-list.php" class="form-container">
                          <div class="form-group row" >
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                            <select class="form-control form-control-sm">
                              <option disable readonly>--Kategori Order Kerja--</option>
                              <option>Penyediaan Barang</option>
                              <option>Perlengkapan Barang</option>

                              </select>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Keperluan Permintaan</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="kategori" placeholder="keperluan">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Keterangan Permintaan</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="kategori" placeholder="Keterangan">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah</label>
                            <div class="col-sm-10">
                            <select class="form-control form-control-sm">
                              <option disable readonly>--Jumlah--</option>
                              <option>1</option>
                              <option>2</option>

                              </select>
                            </div>
                          </div>

                          <div class="form-group row">
                            <div class="col-sm-10">
                              <button type="submit" class="btn btn-primary" onclick="submitForm()">ok</button>
                            </div>
                          </div>
                        </form>
                      


            <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>