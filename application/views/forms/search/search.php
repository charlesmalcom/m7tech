<div id="container">

    <form action='search/results' method='POST'>
        <label>Search For:</label> <input type="text" name="find"><br />
        <label>Search In</label><?php echo form_dropdown('category', $optCategories); ?><br/>

        <label>&nbsp;</label><input type='submit' value='Search'>
    </form>

    <div class="clear"></div>

</div>