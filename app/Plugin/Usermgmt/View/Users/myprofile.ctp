<?php
/*
Cakephp 2.x User Management Premium Version (a product of Ektanjali Softwares Pvt Ltd)
Website- http://ektanjali.com
Plugin Demo- http://umpremium.ektanjali.com
Author- Chetan Varshney (The Director of Ektanjali Softwares Pvt Ltd)
Plugin Copyright No- 11498/2012-CO/L

UMPremium is a copyrighted work of authorship. Chetan Varshney retains ownership of the product and any copies of it, regardless of the form in which the copies may exist. This license is not a sale of the original product or any copies.

By installing and using UMPremium on your server, you agree to the following terms and conditions. Such agreement is either on your own behalf or on behalf of any corporate entity which employs you or which you represent ('Corporate Licensee'). In this Agreement, 'you' includes both the reader and any Corporate Licensee and Chetan Varshney.

The Product is licensed only to you. You may not rent, lease, sublicense, sell, assign, pledge, transfer or otherwise dispose of the Product in any form, on
a temporary or permanent basis, without the prior written consent of Chetan Varshney.

The Product source code may be altered (at your risk)

All Product copyright notices within the scripts must remain unchanged (and visible).

If any of the terms of this Agreement are violated, Chetan Varshney reserves the right to action against you.

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Product.

THE PRODUCT IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE PRODUCT OR THE USE OR OTHER DEALINGS IN THE PRODUCT.
*/
?>
<div class="page-content">
	<div class="um-panel-header">
		<span class="um-panel-title">
			<?php echo __('My Profile') ?>
		</span>
		<span class="um-panel-title-right">
			<?php echo $this->Html->link(__('Edit', true), '/editProfile');?>
		</span>
	</div>
	<div class="um-panel-content">
		<div class="row">
			<div class="col-md-3">
			<?php if (!empty($user)) { ?>
				<div class="left" style="height:100%; margin:5px">
					<div class="profile">
						<img alt="<?php echo h($user['User']['first_name'].' '.$user['User']['last_name']); ?>" src="<?php echo $this->Image->resize('img/'.IMG_DIR, $user['UserDetail']['photo'], 250, null, true) ?>">
					</div>
				</div>
			<?php } ?>
			</div>
			<div class="col-md-6">
			<?php if (!empty($user)) { ?>
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>
							<td><strong><?php echo __('Group(s)');?></strong></td>
							<td><?php echo h($user['UserGroup']['name'])?></td>
						</tr>
						<tr>
							<td><strong><?php echo __('Username');?></strong></td>
							<td><?php echo h($user['User']['username'])?></td>
						</tr>
						<tr>
							<td><strong><?php echo __('First Name');?></strong></td>
							<td><?php echo h($user['User']['first_name'])?></td>
						</tr>
						<tr>
							<td><strong><?php echo __('Last Name');?></strong></td>
							<td><?php echo h($user['User']['last_name'])?></td>
						</tr>
						<tr>
							<td><strong><?php echo __('Email');?></strong></td>
							<td><?php echo h($user['User']['email'])?></td>
						</tr>
						<tr>
							<td><strong><?php echo __('Gender');?></strong></td>
							<td><?php echo h(ucwords($user['UserDetail']['gender']))?></td>
						</tr>
						<tr>
							<td><strong><?php echo __('Marital Status');?></strong></td>
							<td><?php echo h(ucwords($user['UserDetail']['marital_status']))?></td>
						</tr>
						<tr>
							<td><strong><?php echo __('Birthday');?></strong></td>
							<td><?php if(!empty($user['UserDetail']['bday'])) { echo date('d-M-Y',strtotime($user['UserDetail']['bday'])); } ?></td>
						</tr>
						<tr>
							<td><strong><?php echo __('Cellphone');?></strong></td>
							<td><?php echo h($user['UserDetail']['cellphone'])?></td>
						</tr>
						<tr>
							<td><strong><?php echo __('Location');?></strong></td>
							<td><?php echo h($user['UserDetail']['location'])?></td>
						</tr>
						<tr>
							<td><strong><?php echo __('Web Page');?></strong></td>
							<td><?php echo h($user['UserDetail']['web_page'])?></td>
						</tr>
						<tr>
							<td><strong><?php echo __('Status');?></strong></td>
							<td><?php
									if ($user['User']['active']) {
										echo __('Active');
									} else {
										echo __('Inactive');
									}
								?>
							</td>
						</tr>
						<tr>
							<td><strong><?php echo __('Joined');?></strong></td>
							<td><?php echo date('d-M-Y',strtotime($user['User']['created']))?></td>
						</tr>
					</tbody>
				</table>
			<?php } ?>
			</div>
		</div>
	</div>
</div>