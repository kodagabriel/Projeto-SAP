$(function(){
  var nomes = [
    { value: 'Afeni Shakur', data: '#1' },
    { value: 'Angela Davis', data: '#2' },
    { value: 'Aqualtune', data: '#3' },
    { value: 'Beyoncè', data: '#4' },
    { value: 'Carolina Maria de Jesus', data: '#5' },
    { value: 'Cleópatra Tea Filopator', data: '#6' },
    { value: 'Ella Baker', data: '#7' },
    { value: 'Ellen Johnson Sirleaf', data: '#8' },
    { value: 'Elza Soares', data: '#9' },
    { value: 'Harriet Tubman', data: '#10' },
    { value: 'Janeth Arcain', data: '#11' },
    { value: 'Kathleen Cleaver', data: '#12' },
    { value: 'Luísa Mahin', data: '#13' },
    { value: 'Maria Beatriz Nascimento', data: '#14' },
    { value: 'Maya Angelou', data: '#15' },
    { value: 'Melânia Luz', data: '#16' },
    { value: 'Miriam Makeba', data: '#17' },
    { value: 'Noemia de Sousa', data: '#18' },
    { value: 'Ná Agontimé', data: '#19' },
    { value: 'Odete Semedo', data: '#20' },
    { value: 'Rainha Amina de Zaria', data: '#21' },
    { value: 'Rainha Nzinga Mbandi Ngola', data: '#22' },
    { value: 'Rosa Parks', data: '#23' },
    { value: 'Sojouner Truth', data: '#24' },
    { value: 'Sueli Carneiro', data: '#25' },
    { value: 'Tereza de Benguela', data: '#26' },
    { value: 'Thaís Araújo', data: '#27' },
    { value: 'Viola Davis', data: '#28' },
    { value: 'Wangeri Muta Maathai', data: '#29' },
  ];
    var termos = [
    { value: 'Apropriação Cultural', data: 'apropriacaocultural' },
    { value: 'Ação afirmativa', data: 'acaoafirmativa' },
    { value: 'Branquitude', data: 'branquitude' },
    { value: 'Classismo', data: 'classismo' },
    { value: 'Cota', data: 'cota' },
    { value: 'Cota Racial', data: 'cotaracial' },
    { value: 'Discriminação', data: 'discriminacao' },
    { value: 'Esteriotipo', data: 'esteriotipo' },
    { value: 'Etnocentrismo', data: 'etnocentrismo' },
    { value: 'Étnico', data: 'etnico' },
    { value: 'Pigmentocracia', data: 'pigmentocracia' },
    { value: 'Preconceito', data: 'preconceito' },
    { value: 'Protagonismo', data: 'protagonismo' },
    { value: 'Racismo', data: 'racismo' },
    { value: 'Racismo Estrutural', data: 'racismoestrutural' },
    { value: 'Racismo Reverso', data: 'racismoreverso' },
    { value: 'Representatividade', data: 'representatividade' },
    { value: 'Alossexual', data: 'alossexual' },
    { value: 'Arromântico', data: 'arromantico' },
    { value: 'Assexual', data: 'assexual' },
    { value: 'Bifobia e panfobia', data: 'bifobiaepanfobia' },
    { value: 'Bissexual', data: 'bissexual' },
    { value: 'Cisgênero', data: 'cisgenero' },
    { value: 'Diático ou perissexo', data: 'diatico' },
    { value: 'Gay', data: 'gay' },
    { value: 'Homofobia', data: 'Homofobia' },
    { value: 'Intersexo', data: 'intersexo' },
    { value: 'Lésbica', data: 'lesbica.html' },
    { value: 'Lesbofobia', data: 'lesbofobia' },
    { value: 'LGBT+fobia', data: 'lgbtmaisfobia' },
    { value: 'Monodissidente', data: 'monodissidente' },
    { value: 'Pansexual', data: 'pansexual' },
    { value: 'Polissexual', data: 'polissexual' },
    { value: 'Transbinario', data: 'transbinario' },
    { value: 'Transfobia', data: 'transfobia' },
    { value: 'Transgênero', data: 'transgenero' },
    {value:'Trans não-binário', data: 'transnaobinario'},
  ];
 
  $('#autocomplete').autocomplete({
    lookup: nomes,
    onSelect: function (suggestion) {
        window.location.href = suggestion.data;
    },

    lookupFilter: function (suggestion, query, queryLowerCase) {
        return suggestion.value.toLowerCase().startsWith(queryLowerCase);
    }

  });

    $('#autocomplete2').autocomplete({
    lookup: termos,
    onSelect: function (suggestion) {
        window.location.href = suggestion.data+".html";
    },

    lookupFilter: function (suggestion, query, queryLowerCase) {
        return suggestion.value.toLowerCase().startsWith(queryLowerCase);
    }

  });
  // https://www.devbridge.com/sourcery/components/jquery-autocomplete/
});

