<input type="submit" class="button" <?php if(isset($disabled) && $disabled) { ?>disabled <?php } if ( isset( $tabindex ) ) { ?> tabindex="<?php echo $tabindex; ?>"<?php } ?> name="<?php echo $field; ?>" value="<?php echo htmlspecialchars($caption); ?>">
<?php if($message != '') : ?>
<p class="error"><?php echo $message; ?></p>
<?php endif; ?>