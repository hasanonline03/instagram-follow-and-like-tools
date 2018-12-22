<div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-sm-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Üye Ekle</h4>
					</header>
					<hr class="widget-separator">
						<div class="widget-body row">
							<?php if($this->session->flashdata("hata")): ?>
							<div class="col-sm-1"></div>
							<div class="col-sm-10">
								<div class="alert alert-danger alert-custom alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
									<h4 class="alert-title">Hata!</h4>
									<p>
										<?=$this->session->flashdata("hata")?>
									</p>
								</div>
							</div>
							<div class="col-sm-1"></div>
							<?php endif; ?>
							<?php if($this->session->flashdata("basarili")): ?>
							<div class="col-sm-1"></div>
							<div class="col-sm-10">
								<div class="alert alert-success alert-custom alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
									<h4 class="alert-title">Başarılı...</h4>
									<p>
										<?=$this->session->flashdata("basarili")?>
									</p>
								</div>
							</div>
							<div class="col-sm-1"></div>
							<?php endif; ?>
							<form class="form-horizontal col-md-10" method="POST" action="
								<?=base_url("vip/uye-ekle/islem")?>">
								<div class="form-group">
									<label for="adSoyad" class="col-sm-3 control-label">Ad Soyad:</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="adSoyad" id="adSoyad" placeholder="Üye'nin Adı ve Soyadı" required="required" >
										</div>
									</div>
									<div class="form-group">
										<label for="email2" class="col-sm-3 control-label">Email:</label>
										<div class="col-sm-9">
											<input type="email" class="form-control" name="email" id="email2" placeholder="Üye'nin Email Adresi" required="required" >
											</div>
										</div>
										<div class="form-group">
											<label for="sifre" class="col-sm-3 control-label">Şifre:</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="sifre" id="sifre" placeholder="Üye'nin Şifresi" required="required" >
												</div>
											</div>
											<div class="form-group">
												<label for="maxIstek" class="col-sm-3 control-label">Not:</label>
												<div class="col-sm-9">
													<textarea name="vipeNot" id="vipeNot" class="form-control"></textarea>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-9 col-sm-offset-3">
													<button type="submit" class="btn btn-success">Üye Ekle</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>