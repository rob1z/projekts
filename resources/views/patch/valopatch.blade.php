@include('layouts.valoheader')


<script>
    app.get('/', async (req, res) => {
        const news = await HLTV.getNews()
        res.json(news)
      })
</script>