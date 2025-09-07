<?php
// Detecta protocolo (http/https)
$scheme   = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$BASE_URL = $scheme.'://'.$_SERVER['HTTP_HOST'];

// ==========================
// SEO
// ==========================
$name_page   = "Nutricionista Bom Jardim RJ | Consultas Online - Layla Barros";
$description = "Nutricionista em Bom Jardim/RJ, atendimento presencial nas clínicas Fisiomed e Integral Med Solutions. Consultas online disponíveis para todo o Brasil, com foco em cidades vizinhas como Monnerat, Duas Barras, Cordeiro, Cantagalo, Macuco, Carmo, Trajano de Moraes, Santa Maria Madalena, Aperibé, Santo Antônio de Pádua e Nova Friburgo.";
$canonical   = $BASE_URL . "/"; 
$og_image    = $BASE_URL . "/images/layla-og.jpg";

// ==========================
// Contatos
// ==========================
$whatsapp_raw  = "5522999222310";   // só números (para API)
$whatsapp_mask = "(22) 99922-2310"; // formatado para exibição
$email         = "nutrilaylabarros@gmail.com";

// ==========================
// Redes sociais
// ==========================
$instagram = "https://www.instagram.com/nutri.laylabarros/";

// ==========================
// Clínicas (presencial em Bom Jardim)
// ==========================
$clinics = [
  "Clínica Fisiomed",
  "Integral Med Solutions"
];

// ==========================
// Cidades foco para online
// ==========================
$cities_online = [
  "Monnerat",
  "Duas Barras",
  "Cordeiro", 
  "Cantagalo",
  "Macuco",
  "Carmo",
  "Trajano de Moraes",
  "Santa Maria Madalena",
  "Aperibé",
  "Santo Antônio de Pádua",
  "Nova Friburgo"
];

// ==========================
// Conhecimentos / formações
// ==========================
$knowsAbout = [
  "Nutrição Clínica Ortomolecular",
  "Nutrição Funcional",
  "Fitoterapia"
];

// ==========================
// JSON-LD (dados estruturados)
// ==========================

// Área atendida online (Brasil + cidades foco)
$areaServed = [["@type"=>"Country", "name"=>"Brasil"]];
foreach ($cities_online as $c) {
  $areaServed[] = ["@type"=>"City", "name"=>$c];
}

// Monta JSON-LD
$JSON_LD = [
  "@context"       => "https://schema.org",
  "@type"          => "LocalBusiness",
  "additionalType" => "https://schema.org/MedicalBusiness",
  "name"           => "Layla Barros - Nutricionista",
  "image"          => $og_image,
  "url"            => $canonical,
  "telephone"      => "+55-22-99922-2310",
  "priceRange"     => "$$",
  // Endereço físico
  "address" => [
    "@type"           => "PostalAddress",
    "addressLocality" => "Bom Jardim",
    "addressRegion"   => "RJ",
    "addressCountry"  => "BR"
  ],
  "sameAs" => [$instagram, "https://api.whatsapp.com/send?phone=$whatsapp_raw"],
  // Clínicas (todas em Bom Jardim)
  "department" => array_map(fn($n) => [
      "@type"=>"MedicalClinic",
      "name"=>$n,
      "address"=>[
        "@type"=>"PostalAddress",
        "addressLocality"=>"Bom Jardim",
        "addressRegion"=>"RJ",
        "addressCountry"=>"BR"
      ]
  ], $clinics),
  // Atendimento online (Brasil + cidades vizinhas)
  "areaServed" => $areaServed,
  "knowsAbout" => $knowsAbout,
  "founder"    => [
    "@type"=>"Person",
    "name"=>"Layla Barros",
    "alumniOf"=>"Universidade Estácio de Sá (UNESA)"
  ]
];

// String pronta para o <head>
$JSON_LD_STRING = json_encode($JSON_LD, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
?>
