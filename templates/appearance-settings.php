<?php
function ecwid_embed_svg($name) {
	$code = file_get_contents(__DIR__ . '/../images/' . $name . '.svg');

	echo $code;
}

?>
<div class="pure-form ecwid-settings appearance-settings">
  <h2><?php echo t('Ecwid Shopping Cart — Appearance settings'); ?></h2>

  <input type="hidden" name="settings_section" value="appearance" />

  <fieldset>

    <div class="pure-control-group small-input">
      <div class="input">
        <div>
          <input
            id="ecwid_shopping_cart_display_search"
            name="ecwid_shopping_cart_display_search"
            type="checkbox"
            <?php if (variable_get('ecwid_shopping_cart_display_search')): ?>
              checked="checked"
            <?php endif; ?>
            />
        </div>
      </div>
      <div class="label">
        <label for="ecwid_shopping_cart_display_search">
          <?php echo t('Display search box above products'); ?>
        </label>
      </div>
      <div class="note">
        <?php echo sprintf(t('Or you can add search box to your website\'s toolbar using <a href="%s">Drupal native blocks</a>'), url('admin/structure/block')); ?>
      </div>
    </div>

    <div class="pure-control-group small-input">
      <div class="input">
        <div>
          <input
            id="ecwid_shopping_cart_display_categories"
            name="ecwid_shopping_cart_display_categories"
            type="checkbox"
            <?php if (variable_get('ecwid_shopping_cart_display_categories')): ?>
              checked="checked"
            <?php endif; ?>
            />
        </div>
      </div>
      <div class="label">
        <label for="ecwid_shopping_cart_display_categories">
          <?php echo t('Display horizontal categories above products'); ?>
        </label>
      </div>

      <div class="note">
        <?php echo sprintf(t('Or you can add vertical categories to your website\'s toolbar using <a href="%s">Drupal native blocks</a>'), url('admin/structure/block')); ?>
      </div>
    </div>


    <div class="pure-control-group small-input">
      <div class="input">
        <div>
          <input
            id="ecwid_shopping_cart_display_minicart"
            name="ecwid_shopping_cart_display_minicart"
            type="checkbox"
            <?php if (variable_get('ecwid_shopping_cart_display_minicart')): ?>
              checked="checked"
            <?php endif; ?>
            />
        </div>
      </div>
      <div class="label">
        <label for="ecwid_shopping_cart_display_minicart">
          <?php echo t('Enable minicart attached to horizontal categories'); ?>
        </label>
      </div>
      <div class="note">
        <?php echo t("You should disable this option, if you added minicart to your website's&nbsp;sidebar"); ?>
      </div>
    </div>

    <div class="pure-control-group small-input">
      <div class="input">
        <div>
          <input
            id="ecwid_shopping_cart_categories_per_row"
            name="ecwid_shopping_cart_categories_per_row"
            type="text"
            class="number"
            value="<?php echo check_plain(_ecwid_shopping_cart_categories_per_row()); ?>"
          />
        </div>
      </div>
      <div class="label">
        <label for="ecwid_shopping_cart_categories_per_row">
          <?php echo t('Number of categories per row'); ?>
        </label>
      </div>
      <div class="note">
      </div>
    </div>

    <hr />


    <div class="pure-control-group">
      <label class="products-per-page-label"><?php echo t('Number of products per page'); ?></label>
      <div class="ecwid-pb-view-size grid active" tabindex="1">
        <div class="title"><?php echo t('Grid view'); ?></div>
        <div class="main-area">
          <?php ecwid_embed_svg('grid'); ?>
        </div>
        <div class="right">
          <div class="ruler"></div>
          <input
            type="text"
            size="2"
            name="ecwid_shopping_cart_products_per_column_in_grid"
            class="number"
            value="<?php echo check_plain(_ecwid_shopping_cart_products_per_column_in_grid()); ?>"
            />
        </div>
        <div class="bottom">
          <div class="ruler"></div>
          <input
            type="text"
            size="2"
            name="ecwid_shopping_cart_products_per_row_in_grid"
            class="number"
            value="<?php echo check_plain(_ecwid_shopping_cart_products_per_row_in_grid()); ?>"
            />
        </div>
      </div>

      <div class="ecwid-pb-view-size list" tabindex="1">
        <div class="title"><?php echo t('List view'); ?></div>
        <div class="main-area">
          <?php ecwid_embed_svg('list'); ?>
        </div>
        <div class="right">
          <div class="ruler"></div>
          <input
            type="text"
            size="2"
            name="ecwid_shopping_cart_products_per_page_in_list"
            class="number"
            value="<?php echo check_plain(_ecwid_shopping_cart_products_per_page_in_list()); ?>" />
        </div>
      </div>


      <div class="ecwid-pb-view-size table" tabindex="1">
        <div class="title"><?php echo t('Table view'); ?></div>
        <div class="main-area">
          <?php ecwid_embed_svg('table'); ?>
        </div>
        <div class="right">
          <div class="ruler"></div>
          <input
            type="text"
            size="2"
            name="ecwid_shopping_cart_products_per_page_in_table"
            class="number"
            value="<?php echo check_plain(_ecwid_shopping_cart_products_per_page_in_table()); ?>"
            />
        </div>
      </div>
      <p class="note pb-note"><?php echo t('Here you can control how many products will be displayed per page. These options define maximum values. If there is not enough space to show all product columns, Ecwid will adapt the number of columns to hold all products.'); ?></p>
    </div>

    <hr />

    <div class="pure-control-group">
      <label for="ecwid_shopping_cart_view_mode_on_product">
        <?php echo t('Default view mode on product pages'); ?>
      </label>

      <select	id="ecwid_shopping_cart_view_mode_on_product" name="ecwid_shopping_cart_view_mode_on_product">
        <option value="grid" <?php if(_ecwid_shopping_cart_view_mode_on_product() == 'grid') echo 'selected="selected"' ?> >
          <?php echo t('Grid'); ?>
        </option>
        <option value="list" <?php if(_ecwid_shopping_cart_view_mode_on_product() == 'list') echo 'selected="selected"' ?> >
          <?php echo t('List'); ?>
        </option>
        <option value="table" <?php if(_ecwid_shopping_cart_view_mode_on_product() == 'table') echo 'selected="selected"' ?> >
          <?php echo t('Table'); ?>
        </option>
      </select>
    </div>

    <div class="pure-control-group">
      <label for="ecwid_shopping_cart_view_mode_on_search">
        <?php echo t('Default view mode on search results'); ?>
      </label>

      <select	id="ecwid_shopping_cart_view_mode_on_search" name="ecwid_shopping_cart_view_mode_on_search">
        <option value="grid" <?php if(_ecwid_shopping_cart_view_mode_on_search() == 'grid') echo 'selected="selected"' ?> >
          <?php echo t('Grid'); ?>
        </option>
        <option value="list" <?php if(_ecwid_shopping_cart_view_mode_on_search() == 'list') echo 'selected="selected"' ?> >
          <?php echo t('List'); ?>
        </option>
        <option value="table" <?php if(_ecwid_shopping_cart_view_mode_on_search() == 'table') echo 'selected="selected"' ?> >
          <?php echo t('Table'); ?>
        </option>
      </select>
    </div>

    <div class="pure-control-group">
      <label for="ecwid_shopping_cart_default_category_id">
        <?php echo t('Default category id'); ?>
      </label>

      <input
        type="text"
        name="ecwid_shopping_cart_default_category_id"
        id="ecwid_shopping_cart_default_category_id"
        value="<?php echo check_plain(_ecwid_shopping_cart_default_category_id()); ?>"
        />
    </div>

  </fieldset>
</div>