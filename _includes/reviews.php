
<section class="reviews">

	<h2>Customer reviews</h2>
	
	<div class="reviews__rating">
		<span class="rating--stars">
			<svg class="svg__icon"><use xlink:href="#full-star" /></svg>
			<svg class="svg__icon"><use xlink:href="#full-star" /></svg>
			<svg class="svg__icon"><use xlink:href="#full-star" /></svg>
			<svg class="svg__icon"><use xlink:href="#full-star" /></svg>
			<svg class="svg__icon"><use xlink:href="#full-star" /></svg>
		</span>
		
		<p class="rating--summary">Based on 1 review / No reviews yet</p>
		<p class="rating--write"><a href="#reviews__form">Write a review</a></p>
	</div><!-- .reviews__rating -->
	
	<form id="reviews__form" class="reviews__form" action="" method="post" novalidate="novalidate">
		 
		 <a href="#z" class="close" title="Close this">close</a>
		 
		 <fieldset>
			<label>Rating</label>
			<span class="rating--stars">
				<input id="star-5" type="radio" value="5" name="star"><label for="star-5"><svg class="svg__icon"><use xlink:href="#empty-star" /></svg></label>
				<input id="star-4" type="radio" value="4" name="star"><label for="star-4"><svg class="svg__icon"><use xlink:href="#empty-star" /></svg></label>
				<input id="star-3" type="radio" value="3" name="star"><label for="star-3"><svg class="svg__icon"><use xlink:href="#empty-star" /></svg></label>
				<input id="star-2" type="radio" value="2" name="star"><label for="star-2"><svg class="svg__icon"><use xlink:href="#empty-star" /></svg></label>
				<input id="star-1" type="radio" value="1" name="star"><label for="star-1"><svg class="svg__icon"><use xlink:href="#empty-star" /></svg></label>
			</span>
			
			<p class="form__error">Please choose a rating</p>
		</fieldset>
		
		<fieldset>
			<label>Title of review</label>
			<input value="" autocomplete="off" id="" name="" placeholder="" type="text">
			<p class="form__error">Please add a title for the review</p>
		</fieldset>
		
		<fieldset>
			<label>Review</label>
			<textarea value="" autocomplete="off" cols="20" id="" name="" placeholder="" rows="2"></textarea>
			<p class="form__error">Please write a review</p>
		</fieldset>
		
		<fieldset>
			<label>Name</label>
			<input value="" autocomplete="off" id="" name="" placeholder="" type="text">
			<p class="form__error">Please add your name</p>
		</fieldset>
		
		<fieldset>
			<label>Email</label>
			<input value="" autocomplete="off" id="" name="" placeholder="" type="text">
			<p class="form__error">Please add your email address</p>
			<p class="form__error">Your email addresss was not found</p>
			<p class="form__error">Your email order was not found</p>
		</fieldset>

		<fieldset>
			<label>Order No</label>
			<input value="" autocomplete="off" id="" name="" placeholder="" type="text">
			<p class="form__error">Please add an order number</p>
			<p class="form__error">Your order number was not found</p>
		</fieldset>
		
		<fieldset>
			<input class="button colour--text" type="submit" name="submit" value="Send Review">
		</fieldset>
	</form><!-- .reviews__form -->

	<div class="reviews__customers">
		<article>
			<span class="rating--stars">
				<svg class="svg__icon"><use xlink:href="#full-star" /></svg>
				<svg class="svg__icon"><use xlink:href="#full-star" /></svg>
				<svg class="svg__icon"><use xlink:href="#full-star" /></svg>
				<svg class="svg__icon"><use xlink:href="#full-star" /></svg>
				<svg class="svg__icon"><use xlink:href="#empty-star" /></svg>
			</span>
			
			<h3>{{ review title }}</h3>
			<p class="reviewer">{{ person name }}</p>
			<p>{{ review text }}</p>
		</article>
	</div><!-- .reviews__customers -->
	
</section><!-- .reviews -->
