<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<ul class="dropdown-menu">
									<li class="user-header">
										<img class="img-circle" alt="User Image" src="<?= base_url('Assets/UserImage/').$session_datas['us_img_url']; ?>" >
										<p>
											<?= $session_datas['us_name'];?>
											<small>Since. <?= date("F , Y",strtotime($session_datas['us_dte_jin'])); ?> </small>
										</p>
									</li>
									<!-- menu of user  -->
									<li class="user-footer">
										<div class="pull-left">
											<a href="<?= base_url('Welcome/profile')?>" class="btn btn-default btn-flat">Profile</a>
										</div>
										<div class="pull-right">
											<a href="<?= base_url('')?>" class="btn btn-success btn-flat" style="color:#484a49;">Sign Out</a>
										</div>
									</li>
								</ul>