import PerfectScrollbar from 'perfect-scrollbar';
function handleScroll() {
    const panels = document.querySelectorAll('.scrollable-panel');
    panels.forEach(panel => {
        if (panel.scrollHeight > panel.clientHeight) {
            panel.classList.remove('hide-scrollbar');
        } else {
            panel.classList.add('hide-scrollbar');
        }
    });
}
const psLeftPanel = new PerfectScrollbar('#leftPanel');
const psRightPanel = new PerfectScrollbar('#rightPanel');
window.addEventListener('scroll', handleScroll);
window.addEventListener('resize', handleScroll);
handleScroll();

var center = document.getElementById('centerPanel');
var left = document.querySelector('.left-panel');
var right = document.querySelector('.right-panel');
center.addEventListener('scroll', function (e) {


    left.scrollTop = center.scrollTop;
    right.scrollTop = center.scrollTop;
});
