const puppeteer = require('puppeteer');

const convertHTMLToPDF = async (html, format, landscape) => {
    const browser = await puppeteer.launch();
    const page = await browser.newPage();

    await page.setContent(html);

    const pdfBuffer = await page.pdf({
        format: format,
        landscape: landscape
    });

    await browser.close();

    return pdfBuffer;
}

// Lee los argumentos pasados desde PHP
const args = process.argv.slice(2);
const [html, format, landscape] = args;

// Convierte HTML a PDF
convertHTMLToPDF(html, format, landscape)
    .then(pdfBuffer => {
        process.stdout.write(pdfBuffer);
    })
    .catch(error => {
        console.error('Error:', error);
    });