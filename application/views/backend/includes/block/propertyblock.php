<section class="panel">

<div class="panel-body">
<ul class="nav nav-stacked">
<li><a href="<?php echo site_url('site/editproperty?id=').$before['property']->id; ?>">Property Details</a></li>
<li><a href="<?php echo site_url('site/editpropertyinfo?id=').$before['property']->id; ?>">Property Info</a></li>
<li><a href="<?php echo site_url('site/editpropertyamenity?id=').$before['property']->id; ?>">Property Amenities</a></li>
<li><a href="<?php echo site_url('site/uploadpropertyimage?id=').$before['property']->id; ?>">Image</a></li>
<li><a href="<?php echo site_url('site/viewpropertywishlist?id=').$before['property']->id; ?>">Property Wishlist</a></li>
<li><a href="<?php echo site_url('site/viewpropertycomment?id=').$before['property']->id; ?>">Comment</a></li>
</ul>
</div>
</section>