<div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH TÀI KHOẢN</h1>
            </div>
            <div class="row frmdsloai">
                    <div class="row mb10">
                       <table> 
                        <tr>
                            <th></th>
                            <th>MÃ TK</th>
                            <th>USERNAME</th>
                            <th>PASSWORD</th>
                            <th>EMAIL</th>
                            <th>ĐỊA CHỈ</th>
                            <th>SĐT</th>
                            <th>VAI TRÒ </th>
                            <th></th>
                        </tr>
                        <?php 
                            foreach ($listtaikhoan as $taikhoan) {
                                extract($taikhoan);
                                $suatk = "index.php?act=suatk&id=".$id;
                                $xoatk = "index.php?act=xoatk&id=".$id;
                                echo '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$user.'</td>
                                        <td>'.$password.'</td>
                                        <td>'.$email.'</td>
                                        <td>'.$address.'</td>
                                        <td>'.$tel.'</td>
                                        <td>'.$role.'</td>
                                        <td><a href="'.$suatk.'"><input type="button" value="Sửa"> <a href="'.$xoatk.'"><input type="button" value="Xóa"></td>
                                    </tr>';
                            }   
                        ?>                                           
                       </table>
                    </div>

                    <div class="row mb10">
                        
                    </div>

                    
                </form>
            </div>
        </div>