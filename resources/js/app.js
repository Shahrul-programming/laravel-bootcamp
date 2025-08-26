
import './bootstrap';

// SPA-like page transition animation
document.addEventListener('DOMContentLoaded', () => {
	const main = document.querySelector('main');
	if (!main) return;

	// Add initial fade-in
	main.classList.add('transition-opacity', 'duration-500', 'opacity-0');
	setTimeout(() => main.classList.remove('opacity-0'), 50);

	// Fade out on link click
	document.body.addEventListener('click', function (e) {
		const link = e.target.closest('a');
		if (link && link.href && link.origin === window.location.origin && !link.hasAttribute('target') && !link.hasAttribute('data-no-transition')) {
			// Only for internal links
			e.preventDefault();
			main.classList.add('opacity-0');
			setTimeout(() => {
				window.location.href = link.href;
			}, 350);
		}
	});
});
