<?php
require_once 'html/header.html';
?>

<h1>What's New</h1>
<h2>2013</h2>
<div class="year-data">
	<h3>February</h3>
	<ul>
		<li>
			<h4>03</h4>
			<p>Add Search to invoices.</p>
			<p>in Customers, if the number of invoices is clicked, you are now brough to the Invoices tab with the clicked customer filtered.</p>
		</li>
	</ul>
	<h3>January</h3>
	<ul>
		<li>
			<h4>27</h4>
			<p>Pre-fill paid value when clicked.</p>
		</li>
		<li>
			<h4>23</h4>
			<p>Correct bug which showed incorrect values in invoice.</p>
		</li>
		<li>
			<h4>14</h4>
			<p><a href="http://www.youtube.com/embed/v-N4RXDyOLI?rel=0">Video created</a>, demoing milestone 1.</p>
		</li>
	</ul>
</div>
<h2>2012</h2>
<div class="year-data">
	<h3>December</h3>
	<ul>
		<li>
			<h4>23</h4>
			<p>You can now import invoices, products, customers from Simple Invoices.</p>
		</li>
		<li>
			<h4>22</h4>
			<p>New logo!</p>
		</li>
		<li>
			<h4>21</h3>
			<p>You can now export your invoices as PDFs.</p>
		</li>
		<li>
			<h4>19</h4>
			<p>Bizti is now available for download on GitHub - if you want to use Bizti for your own business, but don't want us to manage it for you, feel free to download it and install it yourself. Available here: <a href="https://github.com/kaeverens/bizti">github</a>.</p>
		</li>
	</ul>
	<h3>November</h3>
	<ul>
		<li>
			<h4>21</h4>
			<p>Login using Facebook, Google, or Twitter.</p>
		</li>
		<li>
			<h4>20</h4>
			<p>You can now upload your logo and company details, for use in invoices.</p>
			<p>Finally! You can now create a full invoice and print it.</p>
		</li>
		<li>
			<h4>18</h4>
			<p>Tax is now calculate correctly and recorded in the database separately from invoice totals.</p>
			<p>To delete an invoice, click to edit it, then tick the "delete invoice" box and click "Save"</p>
			<p>You can edit, create, and delete customers directly from the Customers tab.</p>
			<p>You can edit, create, and delete products firectly from the Products tab.</p>
			<p>Payment records can now be viewed in the Payments tab.</p>
		</li>
		<li>
			<h4>17</h4>
			<p>Today, we finished the creation/editing of invoices. You can create customers, create products/services, create tax types, and record invoices.</p>
			<p>You can't yet print out the invoice, but so far, we're very happy with progress.</p>
		</li>
	</ul>
</div>
<script>
$(function() {
	$('.year-data').accordion({
		'active':false,
		'collapsible':true,
		'autoHeight':false
	});
});
</script>

<?php
require_once 'html/footer.html';
