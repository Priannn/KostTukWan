<div class="container-fluid">
                        <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                              <?php foreach ($data['lnt'] as $row) : ?>
                                            <thead>
                                                <tr>
                                                    <th>id pemesan</th>
                                                    <th>id_user</th>
                                                    <th>No Telp</th>
                                                    <th>email</th>
                                                    <th>Tanggal keluar</th>
                                                    <th>Tanggal keluar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>0895800183963</td>
                                                    <td>gede@gmail.com</td>
                                                    <td>08/08/2016</td>
                                                    <td>08/08/2016</td>
                                                </tr>
                                            </tbody>
                                            <?php endforeach; ?>   
                                        </table>      
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
        </div>