import { createFileRoute } from "@tanstack/react-router";
import { useState } from "react";

export const Route = createFileRoute("/")({
  component: Index,
});

export function Index() {
  const [formData, setFormData] = useState({
    nome: "",
    empresa: "",
    telefone: "",
    email: "",
    cidade: "",
    estado: "",
    produto: "",
    quantidade: "",
    mensagem: "",
  });
  const [formSent, setFormSent] = useState(false);

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    setFormSent(true);
  };

  return (
    <div className="min-h-screen bg-[#f4f2ef] text-[#2e2f33] font-sans antialiased selection:bg-[#cbb094] selection:text-[#2e2f33]">
      {/* Topbar */}
      <header className="sticky top-0 z-50 bg-[#f4f2ef]/85 backdrop-blur-md border-b border-[#e3ddd4]">
        <div className="max-w-6xl mx-auto px-4 sm:px-6 h-20 flex items-center justify-between gap-4">
          <a href="#" className="flex items-center gap-3 group">
            <img
              src="/assets/img/logo-riscotex.png"
              alt="RISCOTEX"
              className="h-10 w-auto object-contain transition-transform group-hover:scale-105"
            />
          </a>

          <nav className="hidden lg:flex items-center gap-1">
            <a href="#sobre" className="px-3 py-2 text-xs uppercase tracking-widest font-semibold text-[#6f6a63] hover:text-[#2e2f33] hover:bg-[#e7e0d6] rounded-full transition-all">
              Sobre
            </a>
            <a href="#porque" className="px-3 py-2 text-xs uppercase tracking-widest font-semibold text-[#6f6a63] hover:text-[#2e2f33] hover:bg-[#e7e0d6] rounded-full transition-all">
              Por que a Riscotex
            </a>
            <a href="#diferenciais" className="px-3 py-2 text-xs uppercase tracking-widest font-semibold text-[#6f6a63] hover:text-[#2e2f33] hover:bg-[#e7e0d6] rounded-full transition-all">
              Diferenciais
            </a>
            <a href="#produtos" className="px-3 py-2 text-xs uppercase tracking-widest font-semibold text-[#6f6a63] hover:text-[#2e2f33] hover:bg-[#e7e0d6] rounded-full transition-all">
              Produtos
            </a>
            <a href="#perfuracao" className="px-3 py-2 text-xs uppercase tracking-widest font-semibold text-[#6f6a63] hover:text-[#2e2f33] hover:bg-[#e7e0d6] rounded-full transition-all">
              Perfuração Universal
            </a>
            <a href="#segmentos" className="px-3 py-2 text-xs uppercase tracking-widest font-semibold text-[#6f6a63] hover:text-[#2e2f33] hover:bg-[#e7e0d6] rounded-full transition-all">
              Segmentos
            </a>
            <a href="#contato" className="px-3 py-2 text-xs uppercase tracking-widest font-semibold text-[#6f6a63] hover:text-[#2e2f33] hover:bg-[#e7e0d6] rounded-full transition-all">
              Contato
            </a>
          </nav>

          <a
            href="#contato"
            className="inline-flex items-center justify-center px-6 py-2.5 bg-[#33342f] text-white text-xs uppercase font-bold tracking-widest rounded-full shadow-md hover:bg-[#20211d] hover:shadow-lg transition-all transform hover:-translate-y-0.5"
          >
            Entrar em contato
          </a>
        </div>
      </header>

      <main id="topo">
        {/* HERO SECTION */}
        <section className="relative bg-[#2e2f33] text-[#f3efe9] overflow-hidden py-24 sm:py-32">
          <img
            src="/assets/img/kraft-textura.jpg"
            alt="Riscotex Papéis"
            className="absolute inset-0 w-full h-full object-cover opacity-25"
          />
          <div className="absolute inset-0 bg-gradient-to-r from-[#2e2f33]/95 via-[#2e2f33]/85 to-[#2e2f33]/40" />

          <div className="relative max-w-6xl mx-auto px-4 sm:px-6">
            <span className="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-widest bg-white/10 text-[#f2ede6] border border-white/20 mb-6">
              Riscotex Papéis
            </span>
            <p className="text-sm uppercase tracking-[0.3em] text-[#cbb094] font-bold mb-3">
              Papéis Perfurados
            </p>
            <h1 className="text-4xl sm:text-6xl lg:text-7xl font-extrabold uppercase tracking-tight leading-[1.05] max-w-4xl mb-6">
              Papéis técnicos para corte industrial
            </h1>
            <p className="text-lg sm:text-2xl text-white/90 font-medium max-w-3xl mb-4">
              Soluções que impulsionam a eficiência da sua produção
            </p>
            <p className="text-base sm:text-lg text-white/70 max-w-2xl leading-relaxed mb-8">
              A Riscotex é especialista no desenvolvimento e fornecimento de papéis técnicos para sistemas automáticos de corte industrial. Com tecnologia própria e foco constante em inovação, oferecemos soluções que contribuem para maior produtividade, precisão e qualidade nos processos produtivos dos setores têxtil, couro, sintéticos, automotivo, estofados e calçadista.
            </p>

            <div className="flex flex-wrap gap-4 mb-16">
              <a
                href="#contato"
                className="px-8 py-4 bg-[#a98a63] text-white font-bold uppercase tracking-widest text-sm rounded-full shadow-lg hover:bg-[#8f7451] transition-all transform hover:-translate-y-1"
              >
                Solicitar orçamento
              </a>
              <a
                href="#contato"
                className="px-8 py-4 bg-white/10 hover:bg-white/20 text-white font-bold uppercase tracking-widest text-sm rounded-full border border-white/30 backdrop-blur-sm transition-all transform hover:-translate-y-1"
              >
                Entrar em contato
              </a>
            </div>

            {/* Números em destaque */}
            <div className="grid grid-cols-2 lg:grid-cols-4 gap-px bg-white/15 border border-white/20 rounded-2xl overflow-hidden shadow-2xl">
              <div className="bg-[#2e2f33]/80 p-6 backdrop-blur-md">
                <span className="block text-3xl sm:text-4xl font-extrabold text-[#cbb094]">2017</span>
                <span className="text-xs sm:text-sm text-white/75 uppercase tracking-wider">Início das atividades</span>
              </div>
              <div className="bg-[#2e2f33]/80 p-6 backdrop-blur-md">
                <span className="block text-3xl sm:text-4xl font-extrabold text-[#cbb094]">100%</span>
                <span className="text-xs sm:text-sm text-white/75 uppercase tracking-wider">Tecnologia própria</span>
              </div>
              <div className="bg-[#2e2f33]/80 p-6 backdrop-blur-md">
                <span className="block text-3xl sm:text-4xl font-extrabold text-[#cbb094]">+8</span>
                <span className="text-xs sm:text-sm text-white/75 uppercase tracking-wider">Segmentos atendidos</span>
              </div>
              <div className="bg-[#2e2f33]/80 p-6 backdrop-blur-md">
                <span className="block text-3xl sm:text-4xl font-extrabold text-[#cbb094]">2,5 mm</span>
                <span className="text-xs sm:text-sm text-white/75 uppercase tracking-wider">Furo da perfuração universal</span>
              </div>
            </div>
          </div>
        </section>

        {/* POR QUE ESCOLHER */}
        <section id="porque" className="py-20 sm:py-28 bg-[#ebe5dc]">
          <div className="max-w-6xl mx-auto px-4 sm:px-6">
            <span className="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-widest bg-[#a98a63]/20 text-[#7c6244] border border-[#a98a63]/40 mb-3">
              Por que escolher a Riscotex
            </span>
            <h2 className="text-3xl sm:text-5xl font-extrabold uppercase tracking-tight text-[#2e2f33] mb-4">
              Papel não é commodity quando o corte é automático
            </h2>
            <p className="text-base sm:text-lg text-[#6f6a63] max-w-3xl mb-12">
              Cada detalhe da nossa perfuração foi desenvolvido para que sua mesa de corte trabalhe mais rápido, com menos perdas e resultado uniforme em todo o enfesto.
            </p>

            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
              {[
                { title: "Perfuração universal exclusiva", desc: "Uma única bobina que atende todos os processos de corte, sem trocas de papel a cada tipo de enfesto." },
                { title: "Vácuo estável em toda a mesa", desc: "A distribuição dos furos evita resvalos e mantém o enfesto firme do início ao fim do corte." },
                { title: "Menos perdas, mais produtividade", desc: "Redução de falhas operacionais, retrabalho e paradas de máquina na sua linha de produção." },
                { title: "Especificações sob medida", desc: "Gramatura, largura e diâmetro produzidos conforme a máquina e o processo de cada cliente." },
                { title: "Atendimento técnico de verdade", desc: "Equipe que conhece corte automático e ajuda a escolher o papel certo para cada aplicação." },
                { title: "Entrega no prazo combinado", desc: "Produção organizada e logística previsível para você nunca parar por falta de papel." },
              ].map((item, idx) => (
                <div key={idx} className="bg-white p-8 rounded-2xl border border-[#e3ddd4] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all">
                  <div className="w-12 h-12 rounded-xl bg-[#a98a63]/20 text-[#7c6244] font-bold text-lg flex items-center justify-center mb-5">
                    0{idx + 1}
                  </div>
                  <h3 className="text-xl font-bold uppercase text-[#2e2f33] mb-3">{item.title}</h3>
                  <p className="text-sm text-[#6f6a63] leading-relaxed">{item.desc}</p>
                </div>
              ))}
            </div>

            <div className="mt-12 bg-[#2e2f33] text-white p-8 sm:p-10 rounded-2xl flex flex-col md:flex-row items-center justify-between gap-6 shadow-xl">
              <p className="text-xl sm:text-2xl font-bold uppercase max-w-xl text-center md:text-left">
                Quer saber qual papel é o ideal para a sua máquina de corte?
              </p>
              <a
                href="#contato"
                className="px-8 py-4 bg-[#a98a63] hover:bg-[#8f7451] text-white font-bold uppercase tracking-widest text-sm rounded-full whitespace-nowrap shadow-lg transition-all transform hover:-translate-y-0.5"
              >
                Falar com um especialista
              </a>
            </div>
          </div>
        </section>

        {/* SOBRE */}
        <section id="sobre" className="py-20 sm:py-28 bg-[#f4f2ef]">
          <div className="max-w-6xl mx-auto px-4 sm:px-6">
            <span className="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-widest bg-[#a98a63]/20 text-[#7c6244] border border-[#a98a63]/40 mb-3">
              Quem somos
            </span>
            <h2 className="text-3xl sm:text-5xl font-extrabold uppercase tracking-tight text-[#2e2f33] mb-10">
              Experiência, tecnologia e compromisso com resultados
            </h2>
            <div className="grid grid-cols-1 md:grid-cols-3 gap-8 text-[#6f6a63] text-base leading-relaxed">
              <p className="bg-white p-8 rounded-2xl border border-[#e3ddd4]">
                A Riscotex Papéis Ltda. iniciou suas atividades em 2017, baseada na experiência adquirida ao longo de anos no setor, com tecnologia própria em perfuração de papéis para sistemas de corte automático de tecidos, couros e sintéticos.
              </p>
              <p className="bg-white p-8 rounded-2xl border border-[#e3ddd4]">
                O desafio inicial foi superado com a rápida aceitação do papel microperfurado no mercado. A eficiência da perfuração trouxe vantagens significativas no corte, resultando em qualidade superior no produto final de nossos clientes.
              </p>
              <p className="bg-white p-8 rounded-2xl border border-[#e3ddd4]">
                A Riscotex se mantém na vanguarda com o lançamento da perfuração universal, exclusiva e sem igual no mercado, que atende todas as situações de corte com perfeição.
              </p>
            </div>
          </div>
        </section>

        {/* DIFERENCIAIS */}
        <section id="diferenciais" className="py-20 sm:py-28 bg-[#ebe5dc]">
          <div className="max-w-6xl mx-auto px-4 sm:px-6">
            <span className="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-widest bg-[#a98a63]/20 text-[#7c6244] border border-[#a98a63]/40 mb-3">
              Nossos diferenciais
            </span>
            <h2 className="text-3xl sm:text-5xl font-extrabold uppercase tracking-tight text-[#2e2f33] mb-12">
              Muito além do fornecimento de papel
            </h2>

            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
              {[
                { title: "Tecnologia própria", desc: "Desenvolvemos processos exclusivos que garantem melhor desempenho e eficiência operacional." },
                { title: "Soluções personalizadas", desc: "Produzimos materiais conforme as necessidades específicas de cada cliente e processo produtivo." },
                { title: "Qualidade garantida", desc: "Mantemos rigorosos padrões de controle para assegurar uniformidade e excelência em todos os produtos." },
                { title: "Atendimento especializado", desc: "Nossa equipe possui conhecimento técnico para orientar e encontrar a melhor solução para cada aplicação." },
                { title: "Agilidade e compromisso", desc: "Atendimento eficiente, produção organizada e entregas dentro dos prazos estabelecidos." },
                { title: "Parceria de longo prazo", desc: "Construímos relacionamentos sólidos baseados em confiança, transparência e resultados." },
              ].map((dif, idx) => (
                <div key={idx} className="bg-white p-8 rounded-2xl border border-[#e3ddd4] shadow-sm hover:shadow-lg transition-all">
                  <h3 className="text-xl font-bold uppercase text-[#2e2f33] mb-3">{dif.title}</h3>
                  <p className="text-sm text-[#6f6a63] leading-relaxed">{dif.desc}</p>
                </div>
              ))}
            </div>

            <div className="mt-10 flex justify-center">
              <a
                href="#contato"
                className="px-8 py-4 bg-[#33342f] text-white font-bold uppercase tracking-widest text-sm rounded-full shadow-md hover:bg-[#20211d] transition-all transform hover:-translate-y-1"
              >
                Entrar em contato
              </a>
            </div>
          </div>
        </section>

        {/* PRODUTOS & DESTAQUES */}
        <section id="produtos" className="py-20 sm:py-28 bg-[#f4f2ef]">
          <div className="max-w-6xl mx-auto px-4 sm:px-6">
            <span className="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-widest bg-[#a98a63]/20 text-[#7c6244] border border-[#a98a63]/40 mb-3">
              Nossos diferenciais
            </span>
            <h2 className="text-3xl sm:text-5xl font-extrabold uppercase tracking-tight text-[#2e2f33] mb-4">
              Papel Universal e Papel Microperfurado
            </h2>
            <p className="text-base sm:text-lg text-[#6f6a63] max-w-3xl mb-12">
              Duas perfurações desenvolvidas pela Riscotex para garantir vácuo uniforme, estabilidade do enfesto e acabamento superior em qualquer mesa de corte automático.
            </p>

            {/* CARDS DE DESTAQUE DOS DIFERENCIAIS */}
            <div className="grid grid-cols-1 md:grid-cols-2 gap-8 mb-20">
              {/* Destaque 1: Papel Universal (Ref 02) */}
              <div className="bg-white rounded-3xl border border-[#e3ddd4] overflow-hidden shadow-xl flex flex-col group hover:-translate-y-1 transition-all">
                <div className="relative h-72 overflow-hidden bg-zinc-900">
                  <img
                    src="/assets/img/papel-universal.jpg"
                    alt="Papel Universal"
                    className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                  />
                  <div className="absolute left-4 bottom-4 bg-black/85 backdrop-blur-sm text-white text-xs font-bold px-4 py-1.5 rounded-full border border-white/20">
                    2,5 mm
                  </div>
                </div>
                <div className="p-8 flex flex-col flex-grow">
                  <span className="inline-block px-3 py-1 bg-black/5 text-[#7c6244] text-[11px] font-extrabold uppercase tracking-wider rounded-full mb-3 self-start">
                    Diferencial Exclusivo
                  </span>
                  <h3 className="text-2xl sm:text-3xl font-extrabold uppercase text-[#2e2f33] mb-3">
                    Papel Universal
                  </h3>
                  <p className="text-sm text-[#6f6a63] leading-relaxed mb-6">
                    Perfuração de maior diâmetro e espaçamento calculado, que distribui o vácuo por toda a mesa e atende todos os tipos de corte com um único papel.
                  </p>
                  <ul className="space-y-2 mb-8 text-sm text-[#2e2f33]">
                    <li className="flex items-center gap-2">
                      <span className="text-[#a98a63] font-bold">✔</span> Vácuo distribuído em toda a área da mesa
                    </li>
                    <li className="flex items-center gap-2">
                      <span className="text-[#a98a63] font-bold">✔</span> Maior compactação do enfesto
                    </li>
                    <li className="flex items-center gap-2">
                      <span className="text-[#a98a63] font-bold">✔</span> Atende todas as situações de corte com perfeição
                    </li>
                  </ul>
                  <a
                    href="#contato"
                    className="mt-auto px-6 py-3.5 bg-[#33342f] text-white text-xs font-bold uppercase tracking-widest rounded-full text-center hover:bg-[#20211d] transition-all"
                  >
                    Entrar em contato
                  </a>
                </div>
              </div>

              {/* Destaque 2: Papel Microperfurado (Ref 01) */}
              <div className="bg-white rounded-3xl border border-[#e3ddd4] overflow-hidden shadow-xl flex flex-col group hover:-translate-y-1 transition-all">
                <div className="relative h-72 overflow-hidden bg-zinc-900">
                  <img
                    src="/assets/img/papel-microperfurado.jpg"
                    alt="Papel Microperfurado"
                    className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                  />
                  <div className="absolute left-4 bottom-4 bg-black/85 backdrop-blur-sm text-white text-xs font-bold px-4 py-1.5 rounded-full border border-white/20">
                    Microperfurado de alta densidade
                  </div>
                </div>
                <div className="p-8 flex flex-col flex-grow">
                  <span className="inline-block px-3 py-1 bg-black/5 text-[#7c6244] text-[11px] font-extrabold uppercase tracking-wider rounded-full mb-3 self-start">
                    Diferencial Riscotex
                  </span>
                  <h3 className="text-2xl sm:text-3xl font-extrabold uppercase text-[#2e2f33] mb-3">
                    Papel Microperfurado
                  </h3>
                  <p className="text-sm text-[#6f6a63] leading-relaxed mb-6">
                    Microfuros densos e uniformes, ideais para tecidos leves e enfestos altos, com sucção homogênea e excelente visualização dos riscos.
                  </p>
                  <ul className="space-y-2 mb-8 text-sm text-[#2e2f33]">
                    <li className="flex items-center gap-2">
                      <span className="text-[#a98a63] font-bold">✔</span> Sucção uniforme em toda a superfície
                    </li>
                    <li className="flex items-center gap-2">
                      <span className="text-[#a98a63] font-bold">✔</span> Indicado para tecidos leves e delicados
                    </li>
                    <li className="flex items-center gap-2">
                      <span className="text-[#a98a63] font-bold">✔</span> Excelente leitura do risco impresso
                    </li>
                  </ul>
                  <a
                    href="#contato"
                    className="mt-auto px-6 py-3.5 bg-[#33342f] text-white text-xs font-bold uppercase tracking-widest rounded-full text-center hover:bg-[#20211d] transition-all"
                  >
                    Entrar em contato
                  </a>
                </div>
              </div>
            </div>

            {/* Linha Completa de Produtos */}
            <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
              <div>
                <span className="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-widest bg-[#a98a63]/20 text-[#7c6244] border border-[#a98a63]/40 mb-3">
                  Nossos produtos
                </span>
                <h2 className="text-3xl sm:text-4xl font-extrabold uppercase tracking-tight text-[#2e2f33] mb-6">
                  Linha completa de papéis técnicos industriais
                </h2>
                <img
                  src="/assets/img/bobinas.jpg"
                  alt="Bobinas Riscotex"
                  className="rounded-2xl shadow-xl w-full object-cover"
                />
              </div>

              <div className="space-y-4">
                {[
                  { name: "Papel Perfuração Universal", desc: "Tecnologia exclusiva da Riscotex desenvolvida para atender diferentes processos de corte industrial com máxima eficiência. Sua configuração proporciona excelente atuação do vácuo em toda a área da mesa de corte." },
                  { name: "Papel Microperfurado", desc: "Desenvolvido para aplicações que exigem desempenho consistente e excelente comportamento durante os processos automatizados de corte." },
                  { name: "Papel Plotter", desc: "Utilizado para plotagem e desenvolvimento de riscos industriais. Disponível em diferentes especificações." },
                  { name: "Papel Separação de Tonalidade", desc: "Auxilia na organização dos processos produtivos, facilitando a identificação e separação dos materiais." },
                  { name: "Papel Proteção para Calandra", desc: "Desenvolvido para proteção eficiente durante operações industriais, preservando os equipamentos." },
                  { name: "Papel para Transferência de Cor / Sublimação", desc: "Produzido para aplicações que exigem qualidade e confiabilidade nos processos de transferência de cor." },
                  { name: "Semi-Kraft", desc: "Gramaturas disponíveis: 40g, 50g, 60g, 70g e 80g." },
                ].map((prod, idx) => (
                  <div key={idx} className="bg-white p-5 rounded-2xl border border-[#e3ddd4] shadow-sm hover:border-[#a98a63]/60 transition-all">
                    <h3 className="text-lg font-bold uppercase text-[#2e2f33] mb-1">{prod.name}</h3>
                    <p className="text-xs sm:text-sm text-[#6f6a63] leading-relaxed">{prod.desc}</p>
                  </div>
                ))}
                <div className="pt-4">
                  <a
                    href="#contato"
                    className="inline-block px-8 py-4 bg-[#33342f] text-white font-bold uppercase tracking-widest text-sm rounded-full shadow-md hover:bg-[#20211d] transition-all"
                  >
                    Solicitar cotação
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>

        {/* PERFURAÇÃO UNIVERSAL */}
        <section id="perfuracao" className="py-20 sm:py-28 bg-[#2e2f33] text-[#eef2f6]">
          <div className="max-w-6xl mx-auto px-4 sm:px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
              <span className="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-widest bg-white/10 text-[#f2ede6] border border-white/20 mb-4">
                Perfuração Universal
              </span>
              <h2 className="text-3xl sm:text-5xl font-extrabold uppercase tracking-tight mb-6">
                Uma inovação exclusiva da Riscotex
              </h2>
              <p className="text-white/80 text-base leading-relaxed mb-8">
                Criada para atender diferentes processos de corte industrial, essa solução exclusiva proporciona excelente distribuição do vácuo em toda a área da mesa de corte. O resultado é maior compactação do enfesto, estabilidade operacional superior e melhor qualidade final dos cortes.
              </p>

              <ul className="space-y-3 mb-8 text-sm sm:text-base">
                {[
                  "Melhor distribuição do vácuo",
                  "Maior estabilidade durante o corte",
                  "Excelente visualização dos riscos",
                  "Redução de falhas operacionais",
                  "Maior produtividade",
                  "Melhor acabamento do produto final",
                  "Solução exclusiva desenvolvida pela Riscotex",
                ].map((b, idx) => (
                  <li key={idx} className="flex items-center gap-3">
                    <span className="text-[#cbb094] font-bold">✔</span> {b}
                  </li>
                ))}
              </ul>

              <a
                href="#contato"
                className="inline-block px-8 py-4 bg-[#a98a63] hover:bg-[#8f7451] text-white font-bold uppercase tracking-widest text-sm rounded-full shadow-lg transition-all"
              >
                Quero conhecer essa solução
              </a>
            </div>

            <div>
              <img
                src="/assets/img/papel-universal.jpg"
                alt="Perfuração Universal Riscotex"
                className="rounded-3xl shadow-2xl border border-white/10 w-full object-cover"
              />
            </div>
          </div>
        </section>

        {/* SEGMENTOS */}
        <section id="segmentos" className="py-20 sm:py-28 bg-[#f4f2ef]">
          <div className="max-w-6xl mx-auto px-4 sm:px-6">
            <span className="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-widest bg-[#a98a63]/20 text-[#7c6244] border border-[#a98a63]/40 mb-3">
              Segmentos atendidos
            </span>
            <h2 className="text-3xl sm:text-5xl font-extrabold uppercase tracking-tight text-[#2e2f33] mb-8">
              Soluções para diversos setores industriais
            </h2>

            <div className="flex flex-wrap gap-3 mb-8">
              {[
                "Indústria têxtil",
                "Confecções",
                "Couro",
                "Calçadista",
                "Automotivo",
                "Estofados",
                "Materiais sintéticos",
                "Móveis e estofaria",
              ].map((seg, idx) => (
                <span
                  key={idx}
                  className="bg-white border border-[#e3ddd4] px-6 py-3 rounded-full text-sm font-semibold uppercase tracking-wider shadow-sm hover:border-[#a98a63] hover:bg-[#f7f3ee] transition-all"
                >
                  {seg}
                </span>
              ))}
            </div>

            <p className="text-[#6f6a63] text-base max-w-3xl">
              Independentemente do porte da empresa, trabalhamos para oferecer soluções adequadas às necessidades específicas de cada cliente.
            </p>
          </div>
        </section>

        {/* CONTATO & FORMULÁRIO */}
        <section id="contato" className="py-20 sm:py-28 bg-[#ebe5dc]">
          <div className="max-w-6xl mx-auto px-4 sm:px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <div>
              <span className="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-widest bg-[#a98a63]/20 text-[#7c6244] border border-[#a98a63]/40 mb-3">
                Solicite um orçamento
              </span>
              <h2 className="text-3xl sm:text-5xl font-extrabold uppercase tracking-tight text-[#2e2f33] mb-4">
                Nossa equipe está pronta para atender você
              </h2>
              <p className="text-[#6f6a63] text-base mb-8">
                Informe suas necessidades e receba uma proposta personalizada para sua operação.
              </p>

              <div className="space-y-4 text-sm text-[#6f6a63]">
                <p className="flex items-center gap-3">
                  <span className="text-lg">📍</span> BR 280, 2941 - Rio Negrinho - SC
                </p>
                <p className="flex items-center gap-3">
                  <span className="text-lg">✉</span>{" "}
                  <a href="mailto:contato@riscotex.com.br" className="underline hover:text-[#2e2f33]">
                    contato@riscotex.com.br
                  </a>
                </p>
              </div>
            </div>

            <div className="bg-white p-8 sm:p-10 rounded-3xl border border-[#e3ddd4] shadow-xl">
              {formSent ? (
                <div className="p-6 bg-[#e8f4ec] text-[#1d6b3c] rounded-2xl text-center font-medium">
                  Obrigado! Recebemos sua solicitação e retornaremos em breve no e-mail contato@riscotex.com.br.
                </div>
              ) : (
                <form onSubmit={handleSubmit} className="grid grid-cols-1 sm:grid-cols-2 gap-4">
                  <label className="block text-xs font-semibold text-[#6f6a63]">
                    Nome*
                    <input
                      type="text"
                      required
                      value={formData.nome}
                      onChange={(e) => setFormData({ ...formData, nome: e.target.value })}
                      className="mt-1 w-full px-3 py-2.5 bg-[#fdfcfa] border border-[#e3ddd4] rounded-xl text-sm focus:outline-none focus:border-[#a98a63]"
                    />
                  </label>

                  <label className="block text-xs font-semibold text-[#6f6a63]">
                    Empresa
                    <input
                      type="text"
                      value={formData.empresa}
                      onChange={(e) => setFormData({ ...formData, empresa: e.target.value })}
                      className="mt-1 w-full px-3 py-2.5 bg-[#fdfcfa] border border-[#e3ddd4] rounded-xl text-sm focus:outline-none focus:border-[#a98a63]"
                    />
                  </label>

                  <label className="block text-xs font-semibold text-[#6f6a63]">
                    Telefone
                    <input
                      type="tel"
                      value={formData.telefone}
                      onChange={(e) => setFormData({ ...formData, telefone: e.target.value })}
                      className="mt-1 w-full px-3 py-2.5 bg-[#fdfcfa] border border-[#e3ddd4] rounded-xl text-sm focus:outline-none focus:border-[#a98a63]"
                    />
                  </label>

                  <label className="block text-xs font-semibold text-[#6f6a63]">
                    E-mail*
                    <input
                      type="email"
                      required
                      value={formData.email}
                      onChange={(e) => setFormData({ ...formData, email: e.target.value })}
                      className="mt-1 w-full px-3 py-2.5 bg-[#fdfcfa] border border-[#e3ddd4] rounded-xl text-sm focus:outline-none focus:border-[#a98a63]"
                    />
                  </label>

                  <label className="block text-xs font-semibold text-[#6f6a63]">
                    Cidade
                    <input
                      type="text"
                      value={formData.cidade}
                      onChange={(e) => setFormData({ ...formData, cidade: e.target.value })}
                      className="mt-1 w-full px-3 py-2.5 bg-[#fdfcfa] border border-[#e3ddd4] rounded-xl text-sm focus:outline-none focus:border-[#a98a63]"
                    />
                  </label>

                  <label className="block text-xs font-semibold text-[#6f6a63]">
                    Estado
                    <input
                      type="text"
                      value={formData.estado}
                      onChange={(e) => setFormData({ ...formData, estado: e.target.value })}
                      className="mt-1 w-full px-3 py-2.5 bg-[#fdfcfa] border border-[#e3ddd4] rounded-xl text-sm focus:outline-none focus:border-[#a98a63]"
                    />
                  </label>

                  <label className="block text-xs font-semibold text-[#6f6a63]">
                    Produto de interesse
                    <input
                      type="text"
                      value={formData.produto}
                      onChange={(e) => setFormData({ ...formData, produto: e.target.value })}
                      className="mt-1 w-full px-3 py-2.5 bg-[#fdfcfa] border border-[#e3ddd4] rounded-xl text-sm focus:outline-none focus:border-[#a98a63]"
                    />
                  </label>

                  <label className="block text-xs font-semibold text-[#6f6a63]">
                    Quantidade estimada
                    <input
                      type="text"
                      value={formData.quantidade}
                      onChange={(e) => setFormData({ ...formData, quantidade: e.target.value })}
                      className="mt-1 w-full px-3 py-2.5 bg-[#fdfcfa] border border-[#e3ddd4] rounded-xl text-sm focus:outline-none focus:border-[#a98a63]"
                    />
                  </label>

                  <label className="sm:col-span-2 block text-xs font-semibold text-[#6f6a63]">
                    Mensagem
                    <textarea
                      rows={4}
                      value={formData.mensagem}
                      onChange={(e) => setFormData({ ...formData, mensagem: e.target.value })}
                      className="mt-1 w-full px-3 py-2.5 bg-[#fdfcfa] border border-[#e3ddd4] rounded-xl text-sm focus:outline-none focus:border-[#a98a63]"
                    />
                  </label>

                  <button
                    type="submit"
                    className="sm:col-span-2 py-4 bg-[#33342f] hover:bg-[#20211d] text-white font-bold uppercase tracking-widest text-xs rounded-xl shadow-md transition-all"
                  >
                    Solicitar orçamento
                  </button>
                </form>
              )}
            </div>
          </div>
        </section>
      </main>

      {/* RODAPÉ */}
      <footer className="bg-[#2e2f33] text-[#eef2f6] py-16 border-t border-white/10">
        <div className="max-w-6xl mx-auto px-4 sm:px-6 flex flex-col items-center text-center">
          <img
            src="/assets/img/logo-riscotex.png"
            alt="RISCOTEX PAPÉIS"
            className="w-44 h-auto brightness-0 invert opacity-90 mb-6"
          />
          <p className="max-w-xl text-white/70 text-sm leading-relaxed mb-6">
            Tecnologia, qualidade e inovação em papéis técnicos para corte industrial. Soluções desenvolvidas para aumentar a eficiência produtiva e contribuir para o crescimento da sua empresa.
          </p>

          <a
            href="https://instagram.com/riscotex"
            target="_blank"
            rel="noopener noreferrer"
            className="inline-flex items-center gap-2.5 px-6 py-2.5 mb-8 rounded-full bg-white/10 hover:bg-white/20 border border-white/20 text-white text-xs font-bold tracking-wider uppercase transition-all transform hover:-translate-y-0.5"
          >
            <svg viewBox="0 0 24 24" className="w-4 h-4 fill-current">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
            </svg>
            Instagram: @riscotex
          </a>

          <p className="text-white/45 text-xs">
            © {new Date().getFullYear()} Riscotex Papéis Ltda. - riscotex.com.br
          </p>
        </div>
      </footer>

      {/* BOTÃO FLUTUANTE EXCLUSIVO DE WHATSAPP NO CANTO INFERIOR DIREITO */}
      <a
        href="https://wa.me/5541996198555?text=Ol%C3%A1!%20Vim%20pelo%20site%20da%20Riscotex%20e%20gostaria%20de%20um%20or%C3%A7amento."
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Falar no WhatsApp"
        className="fixed right-5 bottom-5 z-50 inline-flex items-center gap-3 px-5 py-3.5 bg-[#25d366] text-white rounded-full shadow-2xl hover:bg-[#20b858] hover:scale-105 transition-all uppercase tracking-wider text-xs font-bold"
      >
        <svg viewBox="0 0 24 24" className="w-6 h-6 fill-current">
          <path d="M17.47 14.38c-.3-.15-1.75-.86-2.02-.96-.27-.1-.47-.15-.67.15-.2.3-.77.96-.94 1.16-.17.2-.35.22-.65.07-.3-.15-1.25-.46-2.38-1.47-.88-.78-1.48-1.75-1.65-2.05-.17-.3-.02-.46.13-.61.14-.14.3-.35.45-.53.15-.18.2-.3.3-.5.1-.2.05-.38-.02-.53-.08-.15-.67-1.6-.92-2.2-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.8.38-.27.3-1.04 1.02-1.04 2.48s1.07 2.88 1.22 3.08c.15.2 2.1 3.2 5.07 4.49.71.3 1.26.49 1.69.63.71.22 1.36.19 1.87.12.57-.09 1.75-.72 2-1.41.25-.69.25-1.28.17-1.41-.07-.13-.27-.2-.57-.35M12.05 21.7h-.01a9.6 9.6 0 0 1-4.9-1.34l-.35-.21-3.64.96.97-3.55-.23-.36a9.58 9.58 0 0 1-1.47-5.12c0-5.3 4.32-9.6 9.63-9.6a9.56 9.56 0 0 1 6.8 2.82 9.5 9.5 0 0 1 2.82 6.79c0 5.3-4.32 9.6-9.62 9.6M20.52 3.5A11.86 11.86 0 0 0 12.05 0C5.46 0 .1 5.35.1 11.93c0 2.1.55 4.15 1.6 5.96L0 24l6.26-1.64a11.94 11.94 0 0 0 5.79 1.47h.01c6.58 0 11.94-5.35 11.94-11.93 0-3.19-1.24-6.19-3.48-8.4" />
        </svg>
        <span className="hidden sm:inline">WhatsApp</span>
      </a>
    </div>
  );
}

