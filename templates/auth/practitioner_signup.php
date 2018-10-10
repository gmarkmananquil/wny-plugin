<?php
/**
 *
 *
 */

?>

<strong>Registration Form</strong>
<p>
	This control panel will enable you to edit your contact details, and information about
	the services that you wish to promote and where you are promoting them. Please make sure your details are correct, and don't forget
	to add at least one service, including the location.
</p>

<hr>

<h3>Name</h3>

<table>
	<tr>
		<td width="25%">
			<label for="title">Title</label>
		</td>
		<td>
			<input type="checkbox" name="title" id="title" /> DR.
			<p>Only use the title of "Dr" if you are authorized to do so.</p>
		</td>
	</tr>
	
	<tr>
		<td>
			<label for="first_name">First name : </label>
		</td>
		<td>
			<input type="text" name="first_name" id="first_name" />
		</td>
	</tr>
	
	<tr>
		<td>
			<label for="last_name">Last name : </label>
		</td>
		<td>
			<input type="text" name="last_name" id="last_name" />
		</td>
	</tr>
	
	<tr>
		<td>
			<label for="suffix">Suffix : </label>
		</td>
		<td>
			<input type="text" name="suffix" id="suffix" />
			<p>
				Enter any letters you use after your name. If you have letters from multiple qualifications,
				separate them using a comma. Only add letters if you are authorised to do so.
			</p>
		</td>
	</tr>
	
</table>

<h4>Screen-name (for creating reviews)</h4>

<p>This is your identity used to create reviews about other practitioners, if you choose to do so.</p>

<p>To protect your privacy, it should not include your real name and should hide your identity.
	It may consist of letter or numbers which can be separated by "-" or "_". For example,
	it may look like a nick-name.</p>

<p>If you create a review (Endorsements, Written reviews or Tags) of the services of
	any other practitioner, only your Screen-name will be visible next your reviews.</p>

<p>Your Professional profile and real name will never be linked to your reviews,
	so nobody will be able to see the real name of the reviewer.</p>

<?php /** TODO: DETERMINE IF THIS IS USERNAME  **/ ?>
<p>
	* <input type="text" name="alias" id="alias">
</p>

<hr>

<h4>Account Details</h4>

<table>
	<tr>
		<td width="25%">
			<label for="email">Account Email <span class="required">*</span> : </label>
		</td>
		<td>
			<input type="text" name="email" id="email">
		</td>
	</tr>
	<tr>
		<td>
			<label for="password">Password : </label>
		</td>
		<td>
			<input type="password" name="password" id="password">
		</td>
	</tr>
	<tr>
		<td>
			<label for="cpassword">Confirm password : </label>
		</td>
		<td>
			<input type="password" name="cpassword" id="cpassword">
		</td>
	</tr>
</table>

<hr>

<h4>Profession</h4>

<p>Try to describe your profession using as few words as possible. Try to use just one word if possible.</p>
<input type="text" name="profession" id="profession" placeholder="Your profession...">

<table>
	<tr>
		<td width="25%">
			<label for="qualifications">Qualifications : </label>
		</td>
		<td>
			<input type="text" name="qualifications" id="qualifications">
		</td>
	</tr>
	<tr>
		<td width="25%">
			<label for="memberships">Memberships : </label>
		</td>
		<td>
			<input type="text" name="memberships" id="memberships">
		</td>
	</tr>
</table>

<hr>

<h4>Profile Photo</h4>

<p>Please make sure that your profile photo includes your face,
	like a passport photo. However, unlike a passport photo, it is advisable to smile,
	or at least have more of a positive facial expression. Try to make your photo as appealing
	as possible to your potential customers.</p>

<div id="profile-photo">

</div>

<hr>



