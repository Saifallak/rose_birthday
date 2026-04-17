<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>أمنيات روز 🌹</title>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Tajawal:wght@300;400;500;700&family=Pacifico&display=swap" rel="stylesheet"/>
  <!-- html2canvas for card screenshot -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <style>
    :root {
      --bg: #fff5f8;
      --ink: #3d1a2e;
      --soft: #7a4060;
    }
    * { margin:0; padding:0; box-sizing:border-box; }
    html { scroll-behavior:smooth; }

    body {
      background: var(--bg);
      font-family: 'Tajawal', sans-serif;
      min-height: 100vh;
      overflow-x: hidden;
    }

    /* ── decorative BG dots ── */
    body::before {
      content:'';
      position:fixed; inset:0; z-index:0; pointer-events:none;
      background-image:
        radial-gradient(circle, #f4a0b055 1.5px, transparent 1.5px),
        radial-gradient(circle, #d4a84b33 1px, transparent 1px);
      background-size: 38px 38px, 19px 19px;
      background-position: 0 0, 9px 9px;
    }

    /* ── floating shapes ── */
    .floatie {
      position:fixed; pointer-events:none; z-index:0;
      animation: drift ease-in-out infinite alternate;
      opacity:.18;
    }
    @keyframes drift {
      from { transform: translateY(0) rotate(0deg); }
      to   { transform: translateY(-22px) rotate(12deg); }
    }

    /* ══ HEADER ══ */
    header {
      position:relative; z-index:2;
      text-align:center;
      padding: 3rem 1rem 1.5rem;
    }
    .header-badge {
      display:inline-flex; align-items:center; gap:.5rem;
      background: linear-gradient(135deg,#e8637a,#c0405a);
      color:#fff; padding:.35rem 1.2rem;
      border-radius:50px; font-size:.82rem; font-weight:700;
      letter-spacing:.08em; margin-bottom:1rem;
      box-shadow: 0 4px 14px rgba(192,64,90,.35);
    }
    header h1 {
      font-family: 'Fredoka One', cursive;
      font-size: clamp(2.6rem, 8vw, 5rem);
      color: var(--ink);
      line-height: 1.1;
      letter-spacing: .01em;
    }
    header h1 span { color:#e8637a; }
    header p {
      margin-top:.6rem; font-size:1rem;
      color:var(--soft); font-weight:300;
    }

    /* ── total counter ── */
    .total-pill {
      display:inline-block; margin-top:1rem;
      background:rgba(255,255,255,.85);
      border:2px solid #f4a0b0;
      border-radius:50px; padding:.4rem 1.4rem;
      font-size:.92rem; color:var(--ink);
      box-shadow:0 2px 10px rgba(232,99,122,.12);
    }
    .total-pill strong { font-family:'Fredoka One',cursive; font-size:1.3rem; color:#e8637a; }

    /* ══ GRID ══ */
    .grid-wrap {
      position:relative; z-index:2;
      max-width:1100px; margin:0 auto;
      padding:2rem 1.2rem 4rem;
      display:grid;
      grid-template-columns: repeat(auto-fill, minmax(290px, 1fr));
      gap:1.8rem;
    }

    /* ══ WISH CARD ══ */
    .wish-card {
      position:relative;
      border-radius:28px;
      padding:1.8rem 1.6rem 4.2rem;
      overflow:hidden;
      box-shadow:
        0 8px 30px rgba(0,0,0,.08),
        0 2px 0 rgba(255,255,255,.6) inset;
      transition:transform .25s, box-shadow .25s;
      cursor:default;
    }
    .wish-card:hover {
      transform:translateY(-6px) rotate(.4deg);
      box-shadow:0 18px 40px rgba(0,0,0,.12);
    }

    /* ─ card themes ─ */
    .theme-pink   { background:linear-gradient(145deg,#fff0f4 0%,#ffd6e0 100%); }
    .theme-lemon  { background:linear-gradient(145deg,#fffbe6 0%,#fff0a0 100%); }
    .theme-mint   { background:linear-gradient(145deg,#edfff8 0%,#b8f0d8 100%); }
    .theme-sky    { background:linear-gradient(145deg,#edf6ff 0%,#bde0ff 100%); }
    .theme-lavender { background:linear-gradient(145deg,#f5f0ff 0%,#d8c8ff 100%); }
    .theme-peach  { background:linear-gradient(145deg,#fff5ee 0%,#ffd4b0 100%); }

    /* ─ card deco corner ─ */
    .card-deco {
      position:absolute; top:-6px; left:-6px;
      font-size:3.5rem; opacity:.18;
      pointer-events:none; line-height:1;
      transform: rotate(-15deg);
    }
    .card-deco-br {
      position:absolute; bottom:-4px; right:-4px;
      font-size:2.8rem; opacity:.15;
      pointer-events:none; line-height:1;
      transform: rotate(10deg);
    }

    /* ─ card inner ─ */
    .card-ribbon {
      position:absolute; top:14px; right:-1px;
      background:linear-gradient(135deg,#e8637a,#c0405a);
      color:#fff; font-size:.7rem; font-weight:700;
      padding:.25rem .9rem; border-radius:6px 0 0 6px;
      letter-spacing:.06em;
    }

    .card-name {
      font-family:'Fredoka One',cursive;
      font-size:1.25rem;
      color:var(--ink);
      margin-bottom:.7rem;
      display:flex; align-items:center; gap:.4rem;
    }
    .card-name .avatar {
      width:36px; height:36px; border-radius:50%;
      display:flex; align-items:center; justify-content:center;
      font-size:1rem; flex-shrink:0;
      box-shadow:0 2px 8px rgba(0,0,0,.1);
    }

    .card-wish {
      font-size:.96rem; color:var(--ink);
      line-height:1.75; font-weight:400;
      position:relative; padding-right:.8rem;
    }
    .card-wish::before {
      content:'"';
      font-family:'Pacifico',cursive;
      font-size:4rem; color:rgba(0,0,0,.06);
      position:absolute; top:-1rem; right:-1rem;
      line-height:1; pointer-events:none;
    }

    .card-footer {
      position:absolute; bottom:0; left:0; right:0;
      display:flex; align-items:center; justify-content:space-between;
      padding:.85rem 1.4rem;
      background:rgba(255,255,255,.5);
      backdrop-filter:blur(4px);
      border-top:1px solid rgba(255,255,255,.7);
    }
    .card-date {
      font-size:.72rem; color:var(--soft);
      opacity:.8; letter-spacing:.03em;
    }
    .card-for {
      font-family:'Fredoka One',cursive;
      font-size:.78rem; color:#e8637a;
      letter-spacing:.04em;
    }

    /* ─ download btn ─ */
    .btn-dl {
      position:absolute; bottom:52px; left:50%;
      transform:translateX(-50%);
      background:linear-gradient(135deg,#e8637a,#c0405a);
      color:#fff; border:none; border-radius:50px;
      padding:.38rem 1.1rem; font-size:.78rem;
      font-family:'Tajawal',sans-serif; font-weight:700;
      cursor:pointer; white-space:nowrap;
      box-shadow:0 3px 12px rgba(192,64,90,.35);
      transition:transform .15s, opacity .15s;
      opacity:0;
      letter-spacing:.04em;
    }
    .wish-card:hover .btn-dl { opacity:1; }
    .btn-dl:hover { transform:translateX(-50%) scale(1.06); }
    .btn-dl:active { transform:translateX(-50%) scale(.97); }
    .btn-dl.loading { opacity:.7 !important; cursor:default; }

    /* ── empty state ── */
    .empty-state {
      grid-column:1/-1; text-align:center;
      padding:4rem 1rem;
      color:var(--soft); opacity:.6;
    }
    .empty-state .icon { font-size:4rem; margin-bottom:1rem; }
    .empty-state p { font-size:1.1rem; }

    /* ── loading skeleton ── */
    .skeleton {
      border-radius:28px; overflow:hidden;
      background:linear-gradient(90deg,#fde8ed 25%,#fff5f8 50%,#fde8ed 75%);
      background-size:200% 100%;
      animation:shimmer 1.4s infinite;
      height:220px;
    }
    @keyframes shimmer { to{background-position:-200% 0} }

    /* ── error banner ── */
    .error-banner {
      grid-column:1/-1;
      background:#fff0f0; border:1px solid #f4a0b0;
      border-radius:16px; padding:1.2rem 1.5rem;
      color:#c0405a; font-size:.95rem;
      display:none;
    }

    footer {
      position:relative; z-index:2;
      text-align:center; padding-bottom:2.5rem;
      font-size:.8rem; color:var(--soft); opacity:.45;
    }
  </style>
</head>
<body>

<!-- floating decorations -->
<script>
const decos=['🌸','🌷','✨','🎀','💕','⭐','🌟','🦋','🍬','🎈'];
decos.forEach((d,i)=>{
  const el=document.createElement('div');
  el.className='floatie'; el.textContent=d;
  el.style.cssText=`
    font-size:${1.5+Math.random()*2}rem;
    top:${Math.random()*90}vh;
    left:${Math.random()*95}vw;
    animation-duration:${3+Math.random()*4}s;
    animation-delay:${Math.random()*3}s;
  `;
  document.body.appendChild(el);
});
</script>

<header>
  <div class="header-badge">🌹 روز الأولى 🌹</div>
  <h1>أمنيات <span>روز</span> 💌</h1>
  <p>كل الحب والأمنيات اللي اتبعتت لروز في يوم ميلادها</p>
  <div class="total-pill" id="totalPill" style="display:none;">
    <strong id="totalCount">0</strong> أمنية وصلت لروز 🎀
  </div>
</header>

<div class="grid-wrap" id="grid">
  <!-- skeletons while loading -->
  <div class="skeleton" id="sk1"></div>
  <div class="skeleton" id="sk2"></div>
  <div class="skeleton" id="sk3"></div>
</div>

<footer>made with 💗 for Rose · 17 April 2026</footer>

<script>
/* ── card themes & decoration combos ── */
const THEMES = [
  { cls:'theme-pink',    avatar:'#ffd6e0', avatarTxt:'#c0405a', deco:'🌸', decoB:'💕' },
  { cls:'theme-lemon',   avatar:'#fff0a0', avatarTxt:'#7a6000', deco:'⭐', decoB:'🌼' },
  { cls:'theme-mint',    avatar:'#b8f0d8', avatarTxt:'#1a6040', deco:'🦋', decoB:'🍀' },
  { cls:'theme-sky',     avatar:'#bde0ff', avatarTxt:'#1a4a7a', deco:'☁️', decoB:'🌈' },
  { cls:'theme-lavender',avatar:'#d8c8ff', avatarTxt:'#3a1a7a', deco:'✨', decoB:'🔮' },
  { cls:'theme-peach',   avatar:'#ffd4b0', avatarTxt:'#7a3010', deco:'🎀', decoB:'🍑' },
];

function getInitial(name){
  if(!name||name==='مجهول') return '💌';
  return name.trim()[0];
}

function formatDate(raw){
  // raw: "2026-04-17 19:05:33"
  try{
    const d=new Date(raw.replace(' ','T'));
    return d.toLocaleDateString('ar-EG',{year:'numeric',month:'long',day:'numeric'});
  }catch(e){ return raw||''; }
}

function buildCard(wish, idx){
  const theme = THEMES[idx % THEMES.length];
  const initial = getInitial(wish.name);
  const dateStr = formatDate(wish.date);

  const card = document.createElement('div');
  card.className = `wish-card ${theme.cls}`;
  card.dataset.idx = idx;

  card.innerHTML = `
    <div class="card-deco">${theme.deco}</div>
    <div class="card-deco-br">${theme.decoB}</div>
    <div class="card-ribbon">أمنية 💌</div>

    <div class="card-name">
      <div class="avatar" style="background:${theme.avatar};color:${theme.avatarTxt};">${initial}</div>
      <span>${wish.name||'صديق كريم'}</span>
    </div>

    <div class="card-wish">${wish.wish}</div>

    <div class="card-footer">
      <span class="card-date">${dateStr}</span>
      <span class="card-for">لـ روز 🌹</span>
    </div>

    <button class="btn-dl" onclick="downloadCard(this, ${idx})">📸 حفّظ الكارت</button>
  `;

  return card;
}

async function downloadCard(btn, idx){
  if(btn.classList.contains('loading')) return;
  btn.classList.add('loading');
  btn.textContent='⏳ جاري التحضير…';

  const card = document.querySelector(`.wish-card[data-idx="${idx}"]`);
  // hide the button before capture
  btn.style.display='none';

  try{
    const cnv = await html2canvas(card, {
      scale:3,
      backgroundColor:null,
      useCORS:true,
      logging:false,
    });
    const link=document.createElement('a');
    link.download=`rose-wish-${idx+1}.png`;
    link.href=cnv.toDataURL('image/png');
    link.click();
  }catch(e){
    alert('حصل خطأ أثناء الحفظ 😔');
  }

  btn.style.display='';
  btn.classList.remove('loading');
  btn.textContent='📸 حفّظ الكارت';
}

/* ── parse wishes.txt ── */
function parseWishes(text){
  const wishes=[];
  const blocks=text.split('──────────────────────────────').filter(b=>b.trim());
  blocks.forEach(block=>{
    const dateMatch = block.match(/📅 التاريخ\s*:\s*(.+)/);
    const nameMatch = block.match(/👤 الاسم\s*:\s*(.+)/);
    const wishMatch = block.match(/💌 الأمنية\s*:\s*([\s\S]+?)(?=\n──|$)/);
    if(wishMatch){
      wishes.push({
        date: dateMatch?dateMatch[1].trim():'',
        name: nameMatch?nameMatch[1].trim():'مجهول',
        wish: wishMatch[1].trim(),
      });
    }
  });
  return wishes;
}

/* ── main load ── */
async function loadWishes(){
  const grid=document.getElementById('grid');

  try{
    const r=await fetch('wishes.txt?_='+Date.now());

    // remove skeletons
    ['sk1','sk2','sk3'].forEach(id=>{const el=document.getElementById(id);if(el)el.remove();});

    if(!r.ok) throw new Error('لا يوجد ملف أمنيات بعد');

    const text=await r.text();
    const wishes=parseWishes(text);

    if(wishes.length===0){
      grid.innerHTML=`<div class="empty-state"><div class="icon">💌</div><p>لسه مفيش أمنيات — كن أول واحد تكتب!</p></div>`;
      return;
    }

    // total pill
    document.getElementById('totalCount').textContent=wishes.length;
    document.getElementById('totalPill').style.display='inline-block';

    // render cards (newest first)
    [...wishes].reverse().forEach((w,i)=>{
      grid.appendChild(buildCard(w,i));
    });

  }catch(e){
    ['sk1','sk2','sk3'].forEach(id=>{const el=document.getElementById(id);if(el)el.remove();});

    /* demo mode – show sample cards */
    const samples=[
      {name:'أمي',wish:'يا روز يا نور عيني، ربنا يخليكي لينا وتكبري وتفرحينا، كل سنة وانتي أغلى هدية في حياتنا 💗',date:'2026-04-17 19:10:00'},
      {name:'تيتا',wish:'يا حبيبتي الغالية، ربنا يحميكي ويخليكي وتبقي فرحة دنيتنا كلها 🌹🌹🌹',date:'2026-04-17 19:15:00'},
      {name:'عمو أحمد',wish:'عيد ميلاد سعيد يا أميرة! ربنا يرزقك بكل حاجة حلوة ويوميكي سعيدة دايماً 🎂⭐',date:'2026-04-17 19:22:00'},
      {name:'خالتي سارة',wish:'روز الحلوة، كل سنة وانتي طيبة وكبيرة ومبسوطة، بحبك أوي يا أميرتي 🦋💕',date:'2026-04-17 19:30:00'},
      {name:'مجهول',wish:'كل عام وروز بألف خير، يارب تكبري وتبقي قمر 🌙✨',date:'2026-04-17 19:45:00'},
    ];
    document.getElementById('totalCount').textContent=samples.length;
    document.getElementById('totalPill').style.display='inline-block';
    [...samples].reverse().forEach((w,i)=>grid.appendChild(buildCard(w,i)));
  }
}

loadWishes();
</script>

</body>
</html>
