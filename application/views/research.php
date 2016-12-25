<div id="contents" style="margin-top:7%;">
		<div id="about" class="body">
			<h1>Research Projects</h1>
			<h4>Analysis of TGCs in Placenta Development</h4>
			<p>
				We are studying the development of Trophoblast Giant Cells (TGCs) across different placenta developmental stages in the mouse. We are using a total of 28 publicly available RNA-Seq samples for carrying out our analysis. For processing the RNA-Seq samples, I developed an automated RNA-Seq pipeline which is available on github (<a href="https://github.com/ashishjain1988/NGS-Commands/wiki/RNA-Seq-Pipeline">RNA-Seq Pipeline</a>). Currently, we are carrying out the pathway and GO terms analysis to find out the differences between the In-Vitro and In-Vivo TGCs.
			</p>
			<h4>SPINNER</h4>
			<p>
				SPINNER stands for Seeded Protein Interaction Network Neighborhood Expansion and Ranking Algorithm tool. This is an automated tool, which expands the initial seed proteins related to a particular disease, by using the network neighborhood expansion and create protein interaction network for protein network analysis. It expands the protein network by using the Protein-Protein Interaction (PPI) data from the databases like STRING and HAPPI. It also uses a heuristic scoring function for calculating the initial rank score and modified page rank algorithm for calculating the iterative rank score of the proteins in the protein network. This tool also calculates the effect on the network, after the removal of protein from the sub-network. This is called as protein perturbation. As we know, there are certain hub nodes in the protein networks, which play a key role in the activation of the disease. This feature will help us to identify those key hubs which would help in identifying potential drug targets. Using this tool I carried out the analysis of the Amyotrophic lateral sclerosis (ALS) and Breast Cancer.
			</p>
			<h4>GEMINE (Gene Expression Mutation Interaction Neighborhood Exploration)</h4>
			<p>
				Developed the database which stores the data regarding the significance of genes in cancers based on their gene expression and mutations. The raw data has been taken from COSMIC and TCGA and the differentially expressed genes have been filtered and prioritized on the basis of their SPINNER rank. We also calculate the similarity between the genes on the basis of the gene expression data from TCGA and mutation data from COSMIC. We also developed the web application, which is used to browse through the database using PHP and javascript.
			</p>
			<h4>Smart Health Project</h4>
			<p>
				Smart Health is an Electronic Medical Record (EMR) Project which was developed in collaboration with Wenzhou Medical Centre, China. The project involves efficient storage of health examination data that has been provided by Wenzhou Medical Centre. We designed and developed the data model and stored the health examination data in an Oracle database. In this process, we developed automated tools to carry out preprocessing and normalization of the data. We also developed a scoring scheme for scoring individuals on the basis of their test results. The scoring scheme can be used to develop prediction models which can be used to predict the potential disease threat on the basis of the current health conditions of an individual.
			<!-- </p>
			<h4>Survival Analysis of LGR5 and Co-expressed genes for the discovery of the potential Biomarkers in Colon Adenocarcinoma (Colon Cancer)</h4>
			<p> -->
				
			</p>
		</div>
	</div>
	<script>
$(document).ready(function() {
	$('#researchButton').addClass('active');
});
</script> 