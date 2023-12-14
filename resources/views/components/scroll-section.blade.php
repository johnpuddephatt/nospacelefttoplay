  <div {{ $attributes }} x-data="{ shown: false }" x-effect="shown = (currentSection == $el.id)" :id="$id('section')"
      x-intersect.threshold.25="$dispatch('newsection', {id: $el.id, color: $el.dataset.bg})"
      x-intersect.threshold.50="$dispatch('newsection', {id: $el.id, color: $el.dataset.bg})"
      x-intersect.threshold.95="$dispatch('newsection', {id: $el.id, color: $el.dataset.bg})">
      {{ $slot }}
  </div>
