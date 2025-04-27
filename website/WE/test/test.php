<tr>
                        <form  method="POST" accept-charset="utf-8">
                            <td><?php echo "$ID"; ?></td>
                            <td><input type="text" name="email" class="form-control" value="<?php echo "$email"; ?>"></td>
                            <td><input type="text" name="sdt" class="form-control" value="<?php echo "$sdt"; ?>"></td>
                            <td><input type="text" name="diachi" class="form-control" value="<?php echo "$diachi"; ?>"></td>
                            <td><input type="submit" name="submit" class="btn btn-primary float-right" value="Sửa"></td>
                        </form>
                        <?php 
                            if ($_SERVER['REQUEST_METHOD']=='POST') {
                            $email=$_POST['email'];
                            $sdt=$_POST['sdt'];
                            $diachi=$_POST['diachi'];
                            $sql = "UPDATE lienhe SET Email=?, Sdt=?, DiaChi=? WHERE id=?";
                            $stmt= $con->prepare($sql);
                            $stmt->execute([$email, $sdt, $diachi, $ID]);                           
                        }
                         ?>
                    </tr>