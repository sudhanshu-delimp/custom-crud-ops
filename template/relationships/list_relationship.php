<?php
global $wpdb;
$table_name = "wp_posts";
$query = "SELECT * FROM {$table_name} WHERE post_type='cb-relationship' ORDER BY ID DESC";
$items = $wpdb->get_results($query); ?>
<div id="wpbody-content">
  <div id="screen-meta" class="metabox-prefs">
    <div
      id="screen-options-wrap"
      class="hidden"
      tabindex="-1"
      aria-label="Screen Options Tab"
    >
      <form id="adv-settings" method="post">
        <fieldset class="metabox-prefs">
          <legend>Columns</legend>
          <label
            ><input
              class="hide-column-tog"
              name="date-hide"
              type="checkbox"
              id="date-hide"
              value="date"
              checked="checked"
            />Date</label
          >
        </fieldset>
        <fieldset class="screen-options">
          <legend>Pagination</legend>
          <label for="edit_mb-relationship_per_page"
            >Number of items per page:</label
          >
          <input
            type="number"
            step="1"
            min="1"
            max="999"
            class="screen-per-page"
            name="wp_screen_options[value]"
            id="edit_mb-relationship_per_page"
            maxlength="3"
            value="20"
          />
          <input
            type="hidden"
            name="wp_screen_options[option]"
            value="edit_mb-relationship_per_page"
          />
        </fieldset>
        <fieldset class="metabox-prefs view-mode">
          <legend>View mode</legend>
          <label for="list-view-mode">
            <input
              id="list-view-mode"
              type="radio"
              name="mode"
              value="list"
              checked="checked"
            />
            Compact view
          </label>
          <label for="excerpt-view-mode">
            <input
              id="excerpt-view-mode"
              type="radio"
              name="mode"
              value="excerpt"
            />
            Extended view
          </label>
        </fieldset>
        <p class="submit">
          <input
            type="submit"
            name="screen-options-apply"
            id="screen-options-apply"
            class="button button-primary"
            value="Apply"
          />
        </p>
        <input
          type="hidden"
          id="screenoptionnonce"
          name="screenoptionnonce"
          value="db29e8c866"
        />
      </form>
    </div>
  </div>
  <div id="screen-meta-links">
    <div id="screen-options-link-wrap" class="hide-if-no-js screen-meta-toggle">
      <button
        type="button"
        id="show-settings-link"
        class="button show-settings"
        aria-controls="screen-options-wrap"
        aria-expanded="false"
      >
        Screen Options
      </button>
    </div>
  </div>
  <div class="wrap">
    <h1 class="wp-heading-inline">Relationships</h1>

    <a
      href="/wordpro/wp-admin/admin.php?page=add-relationship"
      class="page-title-action"
      >New Relationship</a
    >
    <hr class="wp-header-end" />
    <form id="posts-filter" method="get">
      <h2 class="screen-reader-text">Posts list</h2>
      <table class="wp-list-table widefat fixed striped table-view-list posts">
        <tbody id="the-list">
          <?php
                    foreach ($items as $item) {
                    ?>
          <tr
            id="post-9"
            class="iedit author-self level-0 post-9 type-cb-relationship status-publish hentry"
          >
            <th scope="row" class="check-column">
              <label class="screen-reader-text" for="cb-select-9">
                Select Relation One
              </label>
              <input id="cb-select-9" type="checkbox" name="post[]" value="9" />
              <div class="locked-indicator">
                <span class="locked-indicator-icon" aria-hidden="true"></span>
                <span class="screen-reader-text">
                  “Relation One” is locked
                </span>
              </div>
            </th>
            <td
              class="title column-title has-row-actions column-primary page-title"
              data-colname="Title"
            >
              <div class="locked-info">
                <span class="locked-avatar"></span>
                <span class="locked-text"></span>
              </div>
              <strong
                ><a
                  class="row-title"
                  href="/wordpro/wp-admin/post.php?post=9&amp;action=edit"
                  aria-label="“Relation One” (Edit)"
                >
                  <?php echo $item->post_title ?>
                </a></strong
              >

              <div class="hidden" id="inline_9">
                <div class="post_title"><?php echo $item->post_title ?></div>
                <div class="post_name"><?php echo $item->post_title ?></div>
                <div class="post_author"><?php echo $item->post_title ?></div>
                <div class="comment_status">
                  <?php echo $item->post_title ?>
                </div>
                <div class="ping_status"><?php echo $item->post_title ?></div>
                <div class="_status"><?php echo $item->post_title ?></div>
                <div class="jj"><?php echo $item->post_title ?></div>
                <div class="mm"><?php echo $item->post_title ?></div>
                <div class="aa"><?php echo $item->post_title ?></div>
                <div class="hh"><?php echo $item->post_title ?></div>
                <div class="mn"><?php echo $item->post_title ?></div>
                <div class="ss"><?php echo $item->post_title ?></div>
                <div class="post_password"><?php echo $item->post_title ?></div>
                <div class="page_template"><?php echo $item->post_title ?></div>
                <div class="sticky"></div>
              </div>
              <div class="row-actions">
                <span class="edit">
                  <a
                    href="?page=add-relationship&id=<?php echo $item->ID ?>"
                    aria-label="Edit “Relation One”"
                    >Edit</a
                  >
                </span>
                <!-- <span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “Relation One” inline" aria-expanded="false">Quick&nbsp;Edit</button> | 
                                </span>
                                <span class="trash">
                                    <a href="/wordpro/wp-admin/post.php?post=9&amp;action=trash&amp;_wpnonce=926c90e47c" class="submitdelete" aria-label="Move “Relation One” to the Trash">Trash</a> | 
                                </span>
                                <span class="export"><a href="/wordpro/wordpro/wp-admin/admin.php?page=add-relationship&amp;action=mbb-export&amp;post%5B0%5D=9&amp;_wpnonce=3ef8a66381">Export</a></span> -->
              </div>
              <button type="button" class="toggle-row">
                <span class="screen-reader-text">Show more details</span>
              </button>
            </td>
            <td class="date column-date" data-colname="Date">
              Published<br />
              <?php echo $item->post_date ?>
            </td>
          </tr>
          <?php
                    }
                    ?>
        </tbody>
      </table>
    </form>

    <form method="get">
      <table style="display: none">
        <tbody id="inlineedit">
          <tr
            id="inline-edit"
            class="inline-edit-row inline-edit-row-page quick-edit-row quick-edit-row-page inline-edit-cb-relationship"
            style="display: none"
          >
            <td colspan="3" class="colspanchange">
              <div
                class="inline-edit-wrapper"
                role="region"
                aria-labelledby="quick-edit-legend"
              >
                <fieldset class="inline-edit-col-left">
                  <legend class="inline-edit-legend" id="quick-edit-legend">
                    Quick Edit
                  </legend>
                  <div class="inline-edit-col">
                    <label>
                      <span class="title">Title</span>
                      <span class="input-text-wrap"
                        ><input
                          type="text"
                          name="post_title"
                          class="ptitle"
                          value=""
                      /></span>
                    </label>

                    <fieldset class="inline-edit-date">
                      <legend><span class="title">Date</span></legend>
                      <div class="timestamp-wrap">
                        <label
                          ><span class="screen-reader-text">Month</span
                          ><select class="form-required" name="mm">
                            <option value="01" data-text="Jan">01-Jan</option>
                            <option value="02" data-text="Feb">02-Feb</option>
                            <option value="03" data-text="Mar">03-Mar</option>
                            <option
                              value="04"
                              data-text="Apr"
                              selected="selected"
                            >
                              04-Apr
                            </option>
                            <option value="05" data-text="May">05-May</option>
                            <option value="06" data-text="Jun">06-Jun</option>
                            <option value="07" data-text="Jul">07-Jul</option>
                            <option value="08" data-text="Aug">08-Aug</option>
                            <option value="09" data-text="Sep">09-Sep</option>
                            <option value="10" data-text="Oct">10-Oct</option>
                            <option value="11" data-text="Nov">11-Nov</option>
                            <option value="12" data-text="Dec">12-Dec</option>
                          </select></label
                        >
                        <label
                          ><span class="screen-reader-text">Day</span
                          ><input
                            type="text"
                            name="jj"
                            value="13"
                            size="2"
                            maxlength="2"
                            autocomplete="off"
                            class="form-required" /></label
                        >,
                        <label
                          ><span class="screen-reader-text">Year</span
                          ><input
                            type="text"
                            name="aa"
                            value="2023"
                            size="4"
                            maxlength="4"
                            autocomplete="off"
                            class="form-required"
                        /></label>
                        at
                        <label
                          ><span class="screen-reader-text">Hour</span
                          ><input
                            type="text"
                            name="hh"
                            value="07"
                            size="2"
                            maxlength="2"
                            autocomplete="off"
                            class="form-required" /></label
                        >:<label
                          ><span class="screen-reader-text">Minute</span
                          ><input
                            type="text"
                            name="mn"
                            value="56"
                            size="2"
                            maxlength="2"
                            autocomplete="off"
                            class="form-required"
                        /></label>
                      </div>
                      <input type="hidden" id="ss" name="ss" value="33" />
                    </fieldset>
                    <br class="clear" />

                    <div class="inline-edit-group wp-clearfix">
                      <label class="alignleft">
                        <span class="title">Password</span>
                        <span class="input-text-wrap"
                          ><input
                            type="text"
                            name="post_password"
                            class="inline-edit-password-input"
                            value=""
                        /></span>
                      </label>

                      <span class="alignleft inline-edit-or"> –OR– </span>
                      <label class="alignleft inline-edit-private">
                        <input
                          type="checkbox"
                          name="keep_private"
                          value="private"
                        />
                        <span class="checkbox-title">Private</span>
                      </label>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="inline-edit-col-right">
                  <div class="inline-edit-col">
                    <div class="inline-edit-group wp-clearfix">
                      <label class="inline-edit-status alignleft">
                        <span class="title">Status</span>
                        <select name="_status">
                          <option value="publish">Published</option>
                          <option value="future">Scheduled</option>

                          <option value="pending">Pending Review</option>
                          <option value="draft">Draft</option>
                        </select>
                      </label>
                    </div>
                  </div>
                </fieldset>

                <div class="submit inline-edit-save">
                  <input
                    type="hidden"
                    id="_inline_edit"
                    name="_inline_edit"
                    value="ffee6d273e"
                  />
                  <button type="button" class="button button-primary save">
                    Update
                  </button>

                  <button type="button" class="button cancel">Cancel</button>

                  <span class="spinner"></span>

                  <input type="hidden" name="post_view" value="list" />
                  <input
                    type="hidden"
                    name="screen"
                    value="edit-cb-relationship"
                  />
                  <input type="hidden" name="post_author" value="" />

                  <div class="notice notice-error notice-alt inline hidden">
                    <p class="error"></p>
                  </div>
                </div>
              </div>
              <!-- end of .inline-edit-wrapper -->
            </td>
          </tr>

          <tr
            id="bulk-edit"
            class="inline-edit-row inline-edit-row-page bulk-edit-row bulk-edit-row-page bulk-edit-cb-relationship"
            style="display: none"
          >
            <td colspan="3" class="colspanchange">
              <div
                class="inline-edit-wrapper"
                role="region"
                aria-labelledby="bulk-edit-legend"
              >
                <fieldset class="inline-edit-col-left">
                  <legend class="inline-edit-legend" id="bulk-edit-legend">
                    Bulk Edit
                  </legend>
                  <div class="inline-edit-col">
                    <div id="bulk-title-div">
                      <div id="bulk-titles"></div>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="inline-edit-col-right">
                  <div class="inline-edit-col">
                    <div class="inline-edit-group wp-clearfix">
                      <label class="inline-edit-status alignleft">
                        <span class="title">Status</span>
                        <select name="_status">
                          <option value="-1">— No Change —</option>

                          <option value="publish">Published</option>

                          <option value="private">Private</option>

                          <option value="pending">Pending Review</option>
                          <option value="draft">Draft</option>
                        </select>
                      </label>
                    </div>
                  </div>
                </fieldset>

                <div class="submit inline-edit-save">
                  <input
                    type="submit"
                    name="bulk_edit"
                    id="bulk_edit"
                    class="button button-primary"
                    value="Update"
                  />
                  <button type="button" class="button cancel">Cancel</button>

                  <input type="hidden" name="post_view" value="list" />
                  <input
                    type="hidden"
                    name="screen"
                    value="edit-cb-relationship"
                  />

                  <div class="notice notice-error notice-alt inline hidden">
                    <p class="error"></p>
                  </div>
                </div>
              </div>
              <!-- end of .inline-edit-wrapper -->
            </td>
          </tr>
        </tbody>
      </table>
    </form>

    <div id="ajax-response"></div>
    <div class="clear"></div>
  </div>
</div>
