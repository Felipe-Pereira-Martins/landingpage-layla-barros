 // Coordenadas (usei as mesmas dos seus iframes)
  const CORES = {
    roxo: 'rgb(188,166,229)'
  };

  const integralCoords = { lat: -22.152909277682447, lng: -42.417614055761845 };
  const fisioCoords    = { lat: -22.904606779256013, lng: -42.42044782468547 };

  // Estilo do mapa (tendência roxa suave)
  const mapStyle = [
    { elementType: "geometry", stylers: [{ color: "#ffffff" }] },
    { elementType: "labels.text.fill", stylers: [{ color: "#6b6b6b" }] },
    { elementType: "labels.text.stroke", stylers: [{ color: "#ffffff" }] },
    { featureType: "poi", stylers: [{ visibility: "off" }] },
    { featureType: "road", elementType: "geometry", stylers: [{ color: "#f2eefb" }] },
    { featureType: "road", elementType: "labels.icon", stylers: [{ visibility: "off" }] },
    { featureType: "transit", stylers: [{ visibility: "off" }] },
    { featureType: "water", elementType: "geometry", stylers: [{ color: "#e9e7f6" }] },
    { featureType: "administrative", elementType: "geometry.stroke", stylers: [{ color: "#e0d8f4" }] }
  ];

  // Função para criar marcador com ícone customizado (logo redonda com borda)
  function createMarker(map, position, title, iconUrl) {
    return new google.maps.Marker({
      position,
      map,
      title,
      icon: {
        url: iconUrl,          // use PNG (compatível total) ou WebP
        scaledSize: new google.maps.Size(44, 44), // tamanho do ícone no mapa
      }
    });
  }

  // InfoWindow com rota
  function attachInfo(marker, html) {
    const iw = new google.maps.InfoWindow({ content: html });
    marker.addListener('click', () => iw.open(marker.getMap(), marker));
  }

  // Inicializa os dois mapas
  function initClinicsMap() {
    // INTEGRAL MED
    const mapIntegral = new google.maps.Map(document.getElementById('map-integral'), {
      center: integralCoords,
      zoom: 17,
      styles: mapStyle,
      mapTypeControl: false,
      streetViewControl: false,
      fullscreenControl: false,
      gestureHandling: 'cooperative'
    });
    const markerIntegral = createMarker(
      mapIntegral,
      integralCoords,
      'Clínica Integral Med Solutions',
      'images/integral-med-round-border-custom.png'
    );
    attachInfo(
      markerIntegral,
      `
        <div style="font-size:13px">
          <strong>Clínica Integral Med Solutions</strong><br>
          Edifício Quirino Alves de Mello – 1º andar, sala 5<br>
          <a href="https://www.google.com/maps/dir/?api=1&destination=${integralCoords.lat},${integralCoords.lng}" target="_blank">Traçar rota</a>
        </div>
      `
    );

    // FISIOMED
    const mapFisio = new google.maps.Map(document.getElementById('map-fisio'), {
      center: fisioCoords,
      zoom: 17,
      styles: mapStyle,
      mapTypeControl: false,
      streetViewControl: false,
      fullscreenControl: false,
      gestureHandling: 'cooperative'
    });
    const markerFisio = createMarker(
      mapFisio,
      fisioCoords,
      'Clínica Fisiomed',
      'images/fisio-med-round-border-custom.png'
    );
    attachInfo(
      markerFisio,
      `
        <div style="font-size:13px">
          <strong>Clínica Fisiomed</strong><br>
          Rua Nilo Peçanha, nº 154 (Centro) — Bom Jardim/RJ<br>
          <a href="https://www.google.com/maps/dir/?api=1&destination=${fisioCoords.lat},${fisioCoords.lng}" target="_blank">Traçar rota</a>
        </div>
      `
    );
  }

  // Exponha a função no escopo global para o callback do script do Google
  window.initClinicsMap = initClinicsMap;
