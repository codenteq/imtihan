import AppLayout from '@/components/Layouts/AppLayout'
import Head from 'next/head'
import BackButton from '@/components/BackButton'

Edit.getLayout = (page) => <AppLayout name="Edit">{page}</AppLayout>
export default function Edit() {
    return (
        <>
            <Head>
                <title>Edit - İmtihan</title>
                <meta
                    name="description"
                    content="Generated by codenteq"
                />
                <link rel="icon" href="/favicon.ico" />
            </Head>

            <main>
                <BackButton href="/admin/company"/>
            </main>
        </>
    )
}
