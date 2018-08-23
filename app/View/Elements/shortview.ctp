<div class="wrapper">
							<div class="col-1">
								<div class="box first">
									<div class="pad">
										<div class="wrapper indent-bot">
											<strong class="numb img-indent2">01</strong>
											<div class="extra-wrap">
												<h3 class="color-1"><strong>TO</strong>Download</h3>
											</div>
										</div>
										<div class="wrapper">
											<a class="button img-indent-r" href="Pages/frontdownload/id:page2">>></a>
											<div class="extra-wrap">
											<?php   foreach($dataDownload1 as $download){ ?>
												<a class="link" target="_blank" href="" style="color:white;"><?php echo $download['Download']['title']; ?></a> 
												
											
											<?php  } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-1">
								<div class="box second">
									<div class="pad">
										<div class="wrapper indent-bot">
											<strong class="numb img-indent2">02</strong>
											<div class="extra-wrap">
												<h3 class="color-2"><strong>OUR</strong>Services</h3>
											</div>
										</div>
										<div class="wrapper">
											<a class="button img-indent-r" href="/Pages/frontourservices/id:page3"></a>
											<div class="extra-wrap" >
											 <?php foreach($dataService1 as $service){ ?>
												  <a class="link" href="/" style="color:white;"><?php echo $service['Service']['title']; ?> </a>
											 <?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-2">
								<div class="box third">
									<div class="pad">
										<div class="wrapper indent-bot">
											<strong class="numb img-indent2">03</strong>
											<div class="extra-wrap">
												<h3 class="color-3"><strong>About</strong>Us</h3>
											</div>
										</div>
										<div class="wrapper">
											<a class="button img-indent-r" href="/Pages/frontaboutus/id:page4">>></a>
											<div class="extra-wrap">
												SHAIL  SOFTECH  is a licensed Registering Authority for issuing.........
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>