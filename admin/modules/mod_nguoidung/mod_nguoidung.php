<?php
		include_once("../config/config.php");
		include('phantrang.php');
		include_once("helper.php");
		$nd = new nguoidung();
		$nd->connect_db();
		if(isset($_GET['page'])){
			if($_GET['page']=='quenmatkhau'){
				include('tmpl/quenmatkhau.php');
				if(isset($_POST['tendangnhap']) and $_POST['tendangnhap']!='' and isset($_POST['email']) and $_POST['email']!='' and isset($_POST['maxacnhan']) and $_POST['maxacnhan']!=''){
					$nd->tendangnhap = $_POST['tendangnhap'];
					$nd->email = $_POST['email'];
					if($_SESSION["security_code"]== $_POST['maxacnhan'])
					{
						if($nd->kiemtralaymatkhau()==1)
						{
							$tendangnhap = $_POST['tendangnhap'];
							$matkhau = "123456";
							//Gui mail lay lai mat khau/////////////////////////////////////////////////////////
							require_once("../phpmailler/class.phpmailer.php");
		
							$mail = new PHPMailer();
							
							//******************************************************************************/
							
							// Trong truong hop gui mail GMAIL SMTP can duoc ho tro 2 yeu to sau:
							
							// 1. php_openssl
							
							// 2. Account Gmail enable POP trong Setting
							
							//******************************************************************************/
							
							/******** Hay bo comment di - Neu ban muon gui mail tu GMAIL SMTP *********************/
							
							// $SMTP_Host = "smtp.gmail.com";
							
							// $SMTP_Port = 465;
							
							// $mail->SMTPSecure = 'ssl';
							
							//******************************************************************************/
							
							
							
							/******** Hay bo comment di - Neu ban muon gui mail tu HOST MAIL SMTP *****************/
							
							//******************************************************************************/
							
							$SMTP_Host = "mail.tienich24h.net";
							$SMTP_Port = 25;
							
							//******************************************************************************/
							
							
							
							$SMTP_UserName = "info@tienich24h.net";
							
							$SMTP_Password = "vudinhthang";
							
							$from = $SMTP_UserName;
							
							$fromName = "info@tienich24h.net";
							
							$to = $_POST['email'];
							
							// Luu y: $SMTP_UserName = $from
							
							//******************************************************************************/
							
							/********* Hay bo comment di - Neu truong hop ban can gui toi nhieu mail khac **************/
							
							//******************************************************************************/
							
							// $addressCC = "email01@yahoo.com; email02@yahoo.com;";
							
							// $mail->AddCC($addressCC);
							
							//******************************************************************************/
							
							$mail->IsSMTP();
							
							$mail->Host     = $SMTP_Host;
							
							$mail->SMTPAuth = true;
							
							
							
							$mail->Username = $SMTP_UserName;
							
							$mail->Password = $SMTP_Password;
							
							
							
							$mail->From     = $from;
							
							$mail->FromName = $fromName;
							
							$mail->AddAddress($to);
							
							$mail->AddReplyTo($from, $fromName);
							
							
							
							$mail->WordWrap = 50;
							
							//$mail->AddAttachment("Duong Dan File Dinh Kem");
							
							$mail->IsHTML(true);
							
							
							
							$mail->Subject  =  "Mat khau dang nhap he thong quan tri";
							
							$mail->Body     =  "Mat khau dang nhap la : 123456.";
							
							$mail->AltBody  =  "This is the text-only body";
							
							
							
							if(!$mail->Send())
							
							{
							
							   echo "Mail gui that bai! <p>";
							
							   echo "Thong bao loi: " . $mail->ErrorInfo;
							
							   exit;
							
							}
							else
							{
								$nd->capnhappass($tendangnhap,$matkhau);
								?>
								<script language="javascript">
								alert('Email lấy lại mật khẩu đã được gửi tới mail của bạn!');
								window.location='index.php';
								</script>
								<?php
							}
							/////////////////////////////////////////////////////////////////////////////////////
						}
						else
						{
							?>
							<script language="javascript">
							alert('Nhập tên đăng nhập và email không hợp lệ.');
							</script>
							<?php
						}
					}
					else
					{
						?>
						<script language="javascript">
						alert('Nhập mã xác nhận không chính xác.');
						</script>
						<?php
					}
				}
			}
			//Quen mat khau////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			if($_GET['page']=='nguoidung'){
				//logout thanh vien///////////////////////////////////////////////////////////////////////////////////////////////
				if(isset($_GET['act'])){
					if(isset($_GET['act']) and $_GET['act']=='logout'){
						session_destroy();
						?>
						<script language="javascript"> window.location='index.php'; </script> 
						<?php
					}
					//Sua thong tin nguoi dung/////////////////////////////////////////////////////////////////////////////////////////////////
					if(isset($_GET['act']) and $_GET['act']=='sua')
					{
							$nd->id = $_GET['id'];
							$mang = $nd->laynguoidung();
							if (!empty($mang)) {
								foreach ($mang as $key => $mang) {
									$quyen = trim($mang[4]);
								}
							}
							$mang1 = explode(',',$quyen);
							include('tmpl/sua.php');
							if(isset($_POST['capnhap']))
							{
								if(isset($_POST['mk1']) and $_POST['mk1']!='')//Neu thay doi mat khau cua nguoi dung/////////////////////////////////////
								{
									if(isset($_POST['mk2']) and $_POST['mk2']!='')
									{
										if($_POST['mk1'] == $_POST['mk2'])
										{
											$nd->id = $mang[0];
											$nd->tendangnhap = $_POST['tendangnhap'];
											$nd->matkhau = md5($_POST['mk1']);
											$nd->email = $_POST['email'];
											$nd->trangthai = $_POST['trangthai'];
											if(isset($_POST['q']))
											{
												$mang2 = $_POST['q'];
												$nd->quyen = implode(',',$mang2);
											}
											if($nd->sua())
											{
												?>
												<script language="javascript">
												alert('Cập nhập thông tin người dùng thành công.');
												window.location='index.php?page=nguoidung';
												</script>
												<?php
											}
											else
											{
											?>
											<script language="javascript">
											alert('Cập nhập thông tin người dùng không thành công.');
											</script>
											<?php
											}
										}
										else
										{
											?>
											<script language="javascript">
                                            alert('Nhập lại mật khẩu không khớp.');
                                            </script>
                                            <?php
										}
									}
									else
									{
										?>
                                        <script language="javascript">
										alert('Vui lòng nhập lại mật khẩu.');
										</script>
                                        <?php
									}
								}
								else//Neu khong thay doi mat khau cua nguoi dung /////////////////////////////////////////////////////////////////////
								{
									$nd->id = $mang[0];
									$nd->tendangnhap = $_POST['tendangnhap'];
									$nd->matkhau = '';
									$nd->email = $_POST['email'];
									$nd->trangthai = $_POST['trangthai'];
									if(isset($_POST['q']))
									{
										$mang2 = $_POST['q'];
										$nd->quyen = implode(',',$mang2);
									}
									if($nd->sua())
									{
										?>
										<script language="javascript">
										alert('Cập nhập thông tin người dùng thành công.');
										window.location='index.php?page=nguoidung';
										</script>
										<?php
									}
									else
									{
									?>
									<script language="javascript">
									alert('Cập nhập thông tin người dùng không thành công.');
									</script>
									<?php
									}
								}
							}
					}
					//them moi nguoi dung//////////////////////////////////////////////////////////////////////////////////////////
					if(isset($_GET['act']) and $_GET['act']=='them')
					{
							include('tmpl/them.php');
							if(isset($_POST['them']))
							{
								$nd->tendangnhap = $_POST['tendangnhap'];
								$nd->trangthai = $_POST['trangthai'];
								$nd->email = $_POST['email'];
								$nd->matkhau = md5($_POST['mk1']);
								$nd->quyen="";
								if(isset($_POST['q']))
								{
									$mang = $_POST['q'];
									$nd->quyen = implode(',',$mang);
								}
								if($nd->them())
								{
									?>
                                    <script language="javascript">
									alert('Thêm mới người dùng thành công.');
									window.location='index.php?page=nguoidung';
									</script>
                                    <?php
								}
							}
					}
					//Xoa nguoi dung//////////////////////////////////////////////////////////////////////////////////////////////////////////
					if(isset($_GET['act']) and $_GET['act']=='xoa')//Xoa 
					{
						$nd->id = $_GET['id'];
						$nd->xoa();
						?>
						<script language="javascript">
						alert('Xóa người dùng thành công.');
						window.location='index.php?page=nguoidung';
						</script>
						<?php
				
					}
			
				}
				else
				{
					$limit =10;
					$start =  findstart($limit);
					$count = $nd->nk_count("SELECT * from quanly");
					$page = findpages($count,$limit);
					$sql = "select * from quanly order by id DESC limit $start,$limit";
					$mang = $nd->truyvan($sql);
					$chuoi ='index.php?page=nguoidung';
					include('tmpl/quanly.php');
					if(isset($_GET['id']) and $_GET['id']!='' and isset($_GET['trangthai']) and $_GET['trangthai']!='')
					{
						$nd->id = $_GET['id'];
						$nd->trangthai = $_GET['trangthai'];
						if($nd->capnhaptrangthai())
						{
							?>
							<script language="javascript">
							history.back();
							</script>
							<?php
						}
					}
					
					if(isset($_POST['delete']))//Xoa nguoi dung//////////////////////////////////////////
					{
						if(isset($_POST['nd']))
						{
							$mang = $_POST['nd'];
							$n=count($mang);
							if($n>0)
							{
								for($i=0;$i<$n;$i++)
								{
									$nd->id = $mang[$i];
									$nd->xoa();
								}
								?>
								<script language="javascript">
								window.location='index.php?page=nguoidung';
								</script>
								<?php
							}
						}
					}
				}
			}
		}
		else{
			include('tmpl/login.php');
			if(isset($_POST['dangnhap'])){
				if(isset($_POST['tendangnhap']) and $_POST['tendangnhap']!='' and isset($_POST['matkhau']) and $_POST['matkhau']!=''){
					  $nd->tendangnhap = $_POST['tendangnhap'];
					  $nd->matkhau = md5($_POST['matkhau']);
					  if($nd->kiemtralogin()==1){
						  $mang  = $nd->laylogin();
						  foreach ($mang as $key => $mangs) {
						  	$_SESSION['tendangnhap'] = $mangs['tendangnhap'];
							$_SESSION['quyen'] = $mangs['quyen'];
							$_SESSION['trangthai'] = $mangs['trangthai'];
						  }
						  ?>
						  <script language="javascript">
						  window.location='index.php';
						  </script>
						  <?php
					  }
					  else
					  {
						  ?>
						  <script language="javascript">
						  alert('Tên đăng nhập và mật khẩu không chính xác.');
						  </script>
						  <?php
					  }
				}
			}

		}
?>
