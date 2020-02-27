<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label for="temp" class="temp-text">Temperature</label>
                <input type="text" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp']; ?>" name="originaltemp" size="7" maxlength="7" id="temp" class="form-control">
        </div>
        <div class="col-6">
            <select name="originalunit" class="btn btn-dark dropdown-toggle">
                <option value="--Select--" <?php if ($originalUnit == "--Select--") echo ' selected="selected"'; ?>>--Select--</option>
                <option value="celsius" <?php if ($originalUnit == "celsius") echo ' selected="selected"'; ?>>Celsius</option>
                <option value="farenheit" <?php if ($originalUnit == "farenheit") echo ' selected="selected"'; ?>>Farenheit</option>
                <option value="kelvin" <?php if ($originalUnit == "kelvin") echo ' selected="selected"'; ?>>Kelvin</option>
            </select>
        </div>
    </div> <!--end of first row -->

        <div class="row">
            <div class="col-6">
                <label for="convertedtemp" class="temp-text">Converted Temperature</label>
                <input type="text" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1); ?>" name="convertedtemp" size="7" maxlength="7" id="convertedtemp" class="form-control">
            </div>

            <div class="col-6">
            <select name="conversionunit" class="btn btn-dark dropdown-toggle">
                <option value="--Select--" <?php if ($conversionUnit == "--Select--") echo ' selected="selected"'; ?>>--Select--</option>
                <option value="celsius" <?php if ($conversionUnit == "celsius") echo ' selected="selected"'; ?>>Celsius</option>
                <option value="farenheit" <?php if ($conversionUnit == "farenheit") echo ' selected="selected"'; ?>>Farenheit</option>
                <option value="kelvin" <?php if ($conversionUnit == "kelvin") echo ' selected="selected"'; ?>>Kelvin</option>
            </select>
            </div>
        </div> <!--end of second row -->
        <div class="row">
            <div class="col-12">
            <input type="submit" value="Convert Temp" class="btn btn-sm btn-dark" />
            </div>
        </div> <!--end of third row-->

            </form>
    
</div>