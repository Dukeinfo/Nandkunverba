

<div class="margin-5px-bottom">
@if($record->rating==5)
<i class="fas fa-star text-golden-yellow text-extra-small"></i>
<i class="fas fa-star text-golden-yellow text-extra-small"></i>
<i class="fas fa-star text-golden-yellow text-extra-small"></i>
<i class="fas fa-star text-golden-yellow text-extra-small"></i>
<i class="fas fa-star text-golden-yellow text-extra-small"></i>
@endif
@if($record->rating==4)
<i class="fas fa-star text-golden-yellow text-extra-small"></i>
<i class="fas fa-star text-golden-yellow text-extra-small"></i>
<i class="fas fa-star text-golden-yellow text-extra-small"></i>
<i class="fas fa-star text-golden-yellow text-extra-small"></i>
@endif
@if($record->rating==3)
<i class="fas fa-star text-golden-yellow text-extra-small"></i>
<i class="fas fa-star text-golden-yellow text-extra-small"></i>
<i class="fas fa-star text-golden-yellow text-extra-small"></i>
@endif
@if($record->rating==2)
<i class="fas fa-star text-golden-yellow text-extra-small"></i>
<i class="fas fa-star text-golden-yellow text-extra-small"></i>
@endif
@if($record->rating==1)
<i class="fas fa-star text-golden-yellow text-extra-small"></i>
<i class="fas fa-star text-golden-yellow text-extra-small"></i>
@endif
</div>