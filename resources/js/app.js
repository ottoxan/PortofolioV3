
import './cursor.js';
import './index2.js';
import './utils.js';


const observer = new IntersectionObserver((entries)=>{
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('active');
        }else{
            entry.target.classList.remove('active');
        }
    });
}, {})
const showElement = document.querySelectorAll('.show');
showElement.forEach(el => observer.observe(el));